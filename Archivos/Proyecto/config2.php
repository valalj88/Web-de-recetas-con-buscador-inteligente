<?php
// ── API Key de Gemini ──────────────────────────────────────────
$apiKey = "AIzaSyD_x1apJsx3MMDraALF3B3XAkgX3KiAHM8";

// ── Conexión a la base de datos ────────────────────────────────
// Cambia 'test' por el nombre de tu BD si creaste una nueva (ej: 'delicias')
$conn = new mysqli('localhost', 'root', '', 'delicias');

if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

$conn->set_charset('utf8mb4');
?>
