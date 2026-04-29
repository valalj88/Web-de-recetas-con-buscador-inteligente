<?php
/**
 * obtener_comentarios.php
 * Devuelve los comentarios guardados en BD, más recientes primero.
 * Usa mysqli ($conn) igual que el resto del proyecto.
 */
session_start();
header('Content-Type: application/json');
include 'config.php';

// Comprobar conexión
if (!$conn) {
    http_response_code(500);
    echo json_encode(['success' => false, 'comentarios' => []]);
    exit;
}

// Crear tabla si no existe todavía
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

// Obtener comentarios con nombre del usuario
$result = $conn->query("
    SELECT
        c.id,
        c.receta,
        c.estrellas,
        c.texto,
        c.created_at,
        COALESCE(u.nombre, 'Usuario') AS nombre
    FROM comentarios c
    LEFT JOIN users u ON u.id = c.user_id
    ORDER BY c.created_at DESC
    LIMIT 100
");

if (!$result) {
    http_response_code(500);
    echo json_encode(['success' => false, 'comentarios' => [], 'error' => $conn->error]);
    exit;
}

$comentarios = [];
while ($r = $result->fetch_assoc()) {
    $nombre = htmlspecialchars($r['nombre'], ENT_QUOTES);
    $letra  = strtoupper(mb_substr($nombre, 0, 1));

    // Fecha relativa
    $diff = time() - strtotime($r['created_at']);
    if      ($diff < 60)      $fecha = 'Hace un momento';
    elseif  ($diff < 3600)    $fecha = 'Hace ' . floor($diff / 60)   . ' min';
    elseif  ($diff < 86400)   $fecha = 'Hace ' . floor($diff / 3600) . ' h';
    elseif  ($diff < 2592000) $fecha = 'Hace ' . floor($diff / 86400) . ' días';
    else                      $fecha = date('d/m/Y', strtotime($r['created_at']));

    $comentarios[] = [
        'id'        => $r['id'],
        'nombre'    => $nombre,
        'letra'     => $letra,
        'receta'    => htmlspecialchars($r['receta'], ENT_QUOTES),
        'estrellas' => intval($r['estrellas']),
        'texto'     => htmlspecialchars($r['texto'],  ENT_QUOTES),
        'fecha'     => $fecha,
    ];
}

echo json_encode(['success' => true, 'comentarios' => $comentarios]);
