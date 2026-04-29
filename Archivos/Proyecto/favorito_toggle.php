<?php
/**
 * favorito_toggle.php
 * POST  → añade o quita un favorito del usuario logueado
 * Body JSON: { nombre, tiempo, img, idx }
 * Responde: { success, action: "added"|"removed", favoritos: [...] }
 */
session_start();
header('Content-Type: application/json');

include 'config.php';

// ── 1. Autenticación ─────────────────────────────────────────────
if (empty($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Debes iniciar sesión para guardar favoritos.']);
    exit;
}

// ── 2. Solo POST ──────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
    exit;
}

// ── 3. Leer body JSON ─────────────────────────────────────────────
$body   = json_decode(file_get_contents('php://input'), true);
$userId = (int) $_SESSION['user_id'];
$nombre = trim($body['nombre'] ?? '');
$tiempo = trim($body['tiempo'] ?? '');
$img    = trim($body['img']    ?? '');
$idx    = (int) ($body['idx']  ?? 0);

if (empty($nombre)) {
    echo json_encode(['success' => false, 'message' => 'Nombre de receta requerido.']);
    exit;
}

// ── 4. Toggle en BD ───────────────────────────────────────────────
try {
    // ── PDO ──────────────────────────────────────────────────────
    if (isset($pdo)) {

        // ¿Existe ya?
        $check = $pdo->prepare("SELECT id FROM favoritos WHERE usuario_id = ? AND receta_nombre = ? LIMIT 1");
        $check->execute([$userId, $nombre]);
        $existe = $check->fetch();

        if ($existe) {
            // Quitar
            $del = $pdo->prepare("DELETE FROM favoritos WHERE usuario_id = ? AND receta_nombre = ?");
            $del->execute([$userId, $nombre]);
            $action = 'removed';
        } else {
            // Añadir
            $ins = $pdo->prepare(
                "INSERT INTO favoritos (usuario_id, receta_nombre, receta_tiempo, receta_img, receta_idx)
                 VALUES (?, ?, ?, ?, ?)"
            );
            $ins->execute([$userId, $nombre, $tiempo, $img, $idx]);
            $action = 'added';
        }

        // Devolver lista actualizada
        $list = $pdo->prepare(
            "SELECT receta_nombre AS nombre, receta_tiempo AS tiempo,
                    receta_img AS img, receta_idx AS idx
             FROM favoritos WHERE usuario_id = ? ORDER BY creado_en DESC"
        );
        $list->execute([$userId]);
        $favoritos = $list->fetchAll(PDO::FETCH_ASSOC);

    // ── MySQLi ────────────────────────────────────────────────────
    } elseif (isset($conn)) {

        $check = $conn->prepare("SELECT id FROM favoritos WHERE usuario_id = ? AND receta_nombre = ? LIMIT 1");
        $check->bind_param('is', $userId, $nombre);
        $check->execute();
        $existe = $check->get_result()->fetch_assoc();

        if ($existe) {
            $del = $conn->prepare("DELETE FROM favoritos WHERE usuario_id = ? AND receta_nombre = ?");
            $del->bind_param('is', $userId, $nombre);
            $del->execute();
            $action = 'removed';
        } else {
            $ins = $conn->prepare(
                "INSERT INTO favoritos (usuario_id, receta_nombre, receta_tiempo, receta_img, receta_idx)
                 VALUES (?, ?, ?, ?, ?)"
            );
            $ins->bind_param('isssi', $userId, $nombre, $tiempo, $img, $idx);
            $ins->execute();
            $action = 'added';
        }

        $list = $conn->prepare(
            "SELECT receta_nombre AS nombre, receta_tiempo AS tiempo,
                    receta_img AS img, receta_idx AS idx
             FROM favoritos WHERE usuario_id = ? ORDER BY creado_en DESC"
        );
        $list->bind_param('i', $userId);
        $list->execute();
        $favoritos = $list->get_result()->fetch_all(MYSQLI_ASSOC);

    } else {
        throw new Exception('Sin conexión a base de datos.');
    }

} catch (Exception $e) {
    error_log('favorito_toggle.php: ' . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Error de servidor.']);
    exit;
}

// ── 5. Respuesta ──────────────────────────────────────────────────
echo json_encode([
    'success'   => true,
    'action'    => $action,   // "added" | "removed"
    'favoritos' => $favoritos // lista completa actualizada
]);
