<?php
// LoginController.php

// Incluir el archivo de conexión a la base de datos
require_once('conexion.php');

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $cedula = $_POST['cedula'];
    $contrasena = $_POST['contrasena'];

    // Validación básica de campos
    if (empty($cedula) || empty($contrasena)) {
        echo "Por favor, complete todos los campos.";
        exit;
    }

    // Verificar si la cédula existe en la base de datos
    $query = "SELECT * FROM usuarios WHERE cedula_usuario = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $cedula);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        echo "La cédula no está registrada.";
        exit;
    }

    // Obtener los datos del usuario
    $usuario = $result->fetch_assoc();

    // Verificar si la contraseña es correcta
    if (!password_verify($contrasena, $usuario['contraseña_usuario'])) {
        echo "La contraseña es incorrecta.";
        exit;
    }

    // Iniciar sesión: guardar los datos del usuario en variables de sesión
    session_start();
    $_SESSION['usuario_id'] = $usuario['id_usuario'];  // Asumiendo que 'id_usuario' es el identificador único
    $_SESSION['nombre_usuario'] = $usuario['nombre_usuario'];
    $_SESSION['apellido_usuario'] = $usuario['apellido_usuario'];
    $_SESSION['cedula_usuario'] = $usuario['cedula_usuario'];

    // Redirigir a la página principal o al panel de usuario
    header("Location: ../homeusers.php");
    exit;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
