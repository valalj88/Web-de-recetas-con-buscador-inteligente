<?php
/**
 * check_session.php — Comprueba si hay sesión activa
 * Usado por header-modal.js al cargar la página
 */
session_start();
header('Content-Type: application/json');

if (isset($_SESSION['user_id'])) {
    echo json_encode([
        'logged' => true,
        'user' => [
            'id'    => $_SESSION['user_id'],
            'name'  => $_SESSION['user_name'],
            'email' => $_SESSION['user_email'],
            'avatar'=> 'https://www.gravatar.com/avatar/' . md5(strtolower($_SESSION['user_email'])) . '?s=80&d=identicon'
        ]
    ]);
} else {
    echo json_encode(['logged' => false]);
}
