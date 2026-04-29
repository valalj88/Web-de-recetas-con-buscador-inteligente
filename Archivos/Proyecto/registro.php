<?php
$conexion = mysqli_connect("localhost", "root", "", "usuarios");

// Recogemos los nombres que pusimos en el atributo 'name' del HTML
$nombre   = $_POST['nombre'];
$email    = $_POST['correo'];
$password = $_POST['pass'];

$password_encriptada = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password_encriptada')";

if (mysqli_query($conexion, $sql)) {
    echo "Registro exitoso. ¡Bienvenido!";
} else {
    echo "Error al registrar.";
}
?>