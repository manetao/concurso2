<?php
// RegisterController.php

// Incluir el archivo de conexión a la base de datos
require_once('conexion.php');

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $cedula = $_POST['cedula'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $contrasena = $_POST['contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];

    // Validación básica de campos
    if (empty($nombre) || empty($apellido) || empty($telefono) || empty($correo) || empty($cedula) || empty($fecha_nacimiento) || empty($contrasena) || empty($confirmar_contrasena)) {
        echo "Por favor, complete todos los campos.";
        exit;
    }

    // Validar si las contraseñas coinciden
    if ($contrasena !== $confirmar_contrasena) {
        echo "Las contraseñas no coinciden.";
        exit;
    }

    // Validar formato del correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico no es válido.";
        exit;
    }

    // Comprobar si la cédula ya está registrada
    $query = "SELECT * FROM usuarios WHERE cedula_usuario = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $cedula);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "La cédula ya está registrada.";
        exit;
    }

    // Hash de la contraseña antes de almacenarla
    $hashed_password = password_hash($contrasena, PASSWORD_BCRYPT);

    // Insertar los datos en la base de datos
    $insert_query = "INSERT INTO usuarios (nombre_usuario, apellido_usuario, telefono_usuario, correo_usuario, cedula_usuario, fecha_nac_usuario, contraseña_usuario, rol_usuario) 
                     VALUES (?, ?, ?, ?, ?, ?, ?, '1')";
    $stmt = $conn->prepare($insert_query);
    $stmt->bind_param('sssssss', $nombre, $apellido, $telefono, $correo, $cedula, $fecha_nacimiento, $hashed_password);

    // Ejecutar la inserción de datos y verificar si fue exitosa
    if ($stmt->execute()) {
        echo "Registro exitoso. Ahora puedes iniciar sesión.";
        // Redirigir al usuario a la página de inicio de sesión
        header("Location: ../vista/login.php");
        exit;
    } else {
        // Si ocurre un error durante la inserción
        echo "Hubo un error al registrarse. Intenta nuevamente.";
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>
