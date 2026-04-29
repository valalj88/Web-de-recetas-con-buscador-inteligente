<?php
/**
 * login.php — Procesa el inicio de sesión
 * Devuelve JSON: { success, message, user? }
 */
session_start();
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include 'config.php'; // Tu conexión a BD ($conn o $pdo)

// Solo aceptar POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
    exit;
}

// Leer datos JSON del body (enviado desde JS con fetch)
$body = json_decode(file_get_contents('php://input'), true);
$email    = trim($body['email']    ?? '');
$password =       $body['password'] ?? '';

// Validaciones básicas
if (empty($email) || empty($password)) {
    echo json_encode(['success' => false, 'message' => 'Por favor, rellena todos los campos.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'El formato del correo no es válido.']);
    exit;
}

// ─── Buscar usuario en la BD ───────────────────────────────────────────────
// Cambia el nombre de tabla/columnas si los tienes distintos
try {
    // Opción A: usando PDO (recomendado)
    if (isset($pdo)) {
        $stmt = $pdo->prepare("SELECT id, nombre, email, password FROM usuarios WHERE email = ? LIMIT 1");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Opción B: usando MySQLi
    } elseif (isset($conn)) {
        $stmt = $conn->prepare("SELECT id, nombre, email, password FROM usuarios WHERE email = ? LIMIT 1");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

    } else {
        throw new Exception('Sin conexión a base de datos.');
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Error de servidor. Intenta más tarde.']);
    error_log('login.php error: ' . $e->getMessage());
    exit;
}

// Verificar que existe y que la contraseña es correcta
if (!$user || !password_verify($password, $user['password'])) {
    echo json_encode(['success' => false, 'message' => 'Correo o contraseña incorrectos.']);
    exit;
}

// ─── Crear sesión ──────────────────────────────────────────────────────────
$_SESSION['user_id']    = $user['id'];
$_SESSION['user_email'] = $user['email'];
$_SESSION['user_name']  = $user['nombre'];

// Devolver datos seguros (nunca la contraseña)
echo json_encode([
    'success' => true,
    'message' => '¡Bienvenido de nuevo, ' . htmlspecialchars($user['nombre']) . '!',
    'user' => [
        'id'     => $user['id'],
        'name'   => $user['nombre'],
        'email'  => $user['email'],
        // Gravatar: avatar basado en el email (sin subir fotos)
        'avatar' => 'https://www.gravatar.com/avatar/' . md5(strtolower($user['email'])) . '?s=80&d=identicon'
    ]
]);
