<?php
/**
 * guardar_comentario.php
 * Guarda una valoración + comentario en la BD.
 * Usa mysqli ($conn) igual que el resto del proyecto.
 */
session_start();
header('Content-Type: application/json');
include 'config.php';

// Solo POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
    exit;
}

// Comprobar conexión a BD
if (!$conn) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Error de conexión a la base de datos.']);
    exit;
}

// Solo usuarios logueados
if (empty($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Debes iniciar sesión para comentar.']);
    exit;
}

// Leer JSON del body
$body      = json_decode(file_get_contents('php://input'), true);
$receta    = trim($body['receta']      ?? '');
$estrellas = intval($body['estrellas'] ?? 0);
$texto     = trim($body['texto']       ?? '');

// Validaciones
if (!$receta) {
    echo json_encode(['success' => false, 'message' => 'Selecciona una receta.']);
    exit;
}
if ($estrellas < 1 || $estrellas > 5) {
    echo json_encode(['success' => false, 'message' => 'La puntuación debe estar entre 1 y 5 estrellas.']);
    exit;
}
if (strlen($texto) < 5) {
    echo json_encode(['success' => false, 'message' => 'El comentario es demasiado corto (mín. 5 caracteres).']);
    exit;
}
if (strlen($texto) > 1000) {
    echo json_encode(['success' => false, 'message' => 'El comentario no puede superar los 1000 caracteres.']);
    exit;
}

// Crear tabla si no existe
$conn->query("
    CREATE TABLE IF NOT EXISTS `comentarios` (
        `id`         INT          NOT NULL AUTO_INCREMENT,
        `user_id`    INT          NOT NULL,
        `receta`     VARCHAR(120) NOT NULL,
        `estrellas`  TINYINT      NOT NULL,
        `texto`      TEXT         NOT NULL,
        `created_at` DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`),
        INDEX `idx_receta` (`receta`),
        INDEX `idx_user`   (`user_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
");

// Insertar con prepared statement
$user_id = intval($_SESSION['user_id']);
$stmt    = $conn->prepare("INSERT INTO `comentarios` (user_id, receta, estrellas, texto) VALUES (?, ?, ?, ?)");

if (!$stmt) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Error preparando consulta: ' . $conn->error]);
    exit;
}

$stmt->bind_param("isis", $user_id, $receta, $estrellas, $texto);

if (!$stmt->execute()) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Error al guardar: ' . $stmt->error]);
    exit;
}
$stmt->close();

// Nombre del usuario desde $_SESSION['user_name'] (así lo guarda login.php)
$nombre      = htmlspecialchars($_SESSION['user_name'] ?? 'Usuario', ENT_QUOTES);
$letra       = strtoupper(mb_substr($nombre, 0, 1));

echo json_encode([
    'success'    => true,
    'message'    => '¡Comentario publicado!',
    'comentario' => [
        'nombre'    => $nombre,
        'letra'     => $letra,
        'receta'    => htmlspecialchars($receta, ENT_QUOTES),
        'estrellas' => $estrellas,
        'texto'     => htmlspecialchars($texto, ENT_QUOTES),
        'fecha'     => 'Ahora mismo',
    ]
]);
