<?php
/**
 * logout.php — Cierra la sesión del usuario
 */
session_start();
session_destroy();

// Si la petición es AJAX (fetch), devolver JSON
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) || 
    str_contains($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json')) {
    header('Content-Type: application/json');
    echo json_encode(['success' => true]);
} else {
    // Si es navegación directa, redirigir al inicio
    header('Location: index.php');
}
exit;
