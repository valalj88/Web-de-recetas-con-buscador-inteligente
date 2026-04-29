<?php
// ── API Key de Gemini ──────────────────────────────────────────
$apiKey = "AIzaSyD_x1apJsx3MMDraALF3B3XAkgX3KiAHM8";

// ── Conexión a la base de datos ────────────────────────────────
// SIN die() para no romper gemini_proxy.php si la BD no está lista
$conn = @new mysqli('localhost', 'root', '', 'delicias');

if ($conn->connect_error) {
    $conn = null; // login.php y register.php comprueban si $conn es null
} else {
    $conn->set_charset('utf8mb4');
}
?>
