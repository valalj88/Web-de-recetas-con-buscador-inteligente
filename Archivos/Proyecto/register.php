<?php
// DEBUG TEMPORAL - quitar cuando funcione
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 * register.php — Procesa el registro de nuevos usuarios
 * Devuelve JSON: { success, message }
 */
session_start();
header('Content-Type: application/json');

include 'config.php';

// Comprobar conexión (puede ser null si la BD no existe)
if ((!isset($conn) || $conn === null) && !isset($pdo)) {
    echo json_encode(['success' => false, 'message' => 'Error de BD: revisa el nombre de la base de datos en config.php']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
    exit;
}

$body            = json_decode(file_get_contents('php://input'), true);
$nombre          = trim($body['nombre']          ?? '');
$email           = trim($body['email']           ?? '');
$password        =      $body['password']        ?? '';
$passwordConfirm =      $body['passwordConfirm'] ?? '';

// ─── Validaciones ──────────────────────────────────────────────────────────
if (empty($nombre) || empty($email) || empty($password) || empty($passwordConfirm)) {
    echo json_encode(['success' => false, 'message' => 'Por favor, rellena todos los campos.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'El formato del correo no es válido.']);
    exit;
}

if (strlen($password) < 8) {
    echo json_encode(['success' => false, 'message' => 'La contraseña debe tener al menos 8 caracteres.']);
    exit;
}

if ($password !== $passwordConfirm) {
    echo json_encode(['success' => false, 'message' => 'Las contraseñas no coinciden.']);
    exit;
}

// ─── Comprobar si el email ya existe ───────────────────────────────────────
try {
    if (isset($pdo)) {
        $check = $pdo->prepare("SELECT id FROM usuarios WHERE email = ? LIMIT 1");
        $check->execute([$email]);
        $existe = $check->fetch();

    } elseif (isset($conn)) {
        $check = $conn->prepare("SELECT id FROM usuarios WHERE email = ? LIMIT 1");
        $check->bind_param('s', $email);
        $check->execute();
        $existe = $check->get_result()->fetch_assoc();

    } else {
        throw new Exception('Sin conexión a base de datos.');
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'DEBUG: ' . $e->getMessage()]);
    exit;
}

if ($existe) {
    echo json_encode(['success' => false, 'message' => 'Este correo ya está registrado. ¿Quieres iniciar sesión?']);
    exit;
}

// ─── Insertar nuevo usuario ────────────────────────────────────────────────
$hash = password_hash($password, PASSWORD_DEFAULT);

try {
    if (isset($pdo)) {
        $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, password, created_at) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$nombre, $email, $hash]);
        $newId = $pdo->lastInsertId();

    } elseif (isset($conn)) {
        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, password, created_at) VALUES (?, ?, ?, NOW())");
        $stmt->bind_param('sss', $nombre, $email, $hash);
        $stmt->execute();
        $newId = $conn->insert_id;
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'DEBUG insert: ' . $e->getMessage()]);
    exit;
}

// ─── Auto-login tras el registro ──────────────────────────────────────────
$_SESSION['user_id']    = $newId;
$_SESSION['user_email'] = $email;
$_SESSION['user_name']  = $nombre;

echo json_encode([
    'success' => true,
    'message' => '¡Cuenta creada! Bienvenido/a, ' . htmlspecialchars($nombre) . ' 🎉',
    'user' => [
        'id'     => $newId,
        'name'   => $nombre,
        'email'  => $email,
        'avatar' => 'https://www.gravatar.com/avatar/' . md5(strtolower($email)) . '?s=80&d=identicon'
    ]
]);
