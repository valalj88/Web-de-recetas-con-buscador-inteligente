<?php
/**
 * favoritos_get.php
 * GET  → devuelve todos los favoritos del usuario logueado
 * Responde: { success, favoritos: [{nombre, tiempo, img, idx}, ...] }
 */
session_start();
header('Content-Type: application/json');

include 'config.php';

// ── Autenticación ─────────────────────────────────────────────────
if (empty($_SESSION['user_id'])) {
    // No logueado → devolvemos lista vacía (no error, el JS lo maneja)
    echo json_encode(['success' => true, 'logged' => false, 'favoritos' => []]);
    exit;
}

$userId = (int) $_SESSION['user_id'];

try {
    // ── PDO ──────────────────────────────────────────────────────
    if (isset($pdo)) {
        $stmt = $pdo->prepare(
            "SELECT receta_nombre AS nombre, receta_tiempo AS tiempo,
                    receta_img AS img, receta_idx AS idx
             FROM favoritos WHERE usuario_id = ? ORDER BY creado_en DESC"
        );
        $stmt->execute([$userId]);
        $favoritos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // ── MySQLi ────────────────────────────────────────────────────
    } elseif (isset($conn)) {
        $stmt = $conn->prepare(
            "SELECT receta_nombre AS nombre, receta_tiempo AS tiempo,
                    receta_img AS img, receta_idx AS idx
             FROM favoritos WHERE usuario_id = ? ORDER BY creado_en DESC"
        );
        $stmt->bind_param('i', $userId);
        $stmt->execute();
        $favoritos = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    } else {
        throw new Exception('Sin conexión a base de datos.');
    }

} catch (Exception $e) {
    error_log('favoritos_get.php: ' . $e->getMessage());
    echo json_encode(['success' => false, 'favoritos' => []]);
    exit;
}

echo json_encode([
    'success'   => true,
    'logged'    => true,
    'favoritos' => $favoritos
]);
