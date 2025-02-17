<?php
// db_connection.php

$host = 'localhost'; // Cambiar según tu configuración
$dbname = 'clinica'; // Nombre de tu base de datos
$username = 'root'; // Usuario de la base de datos
$password = ''; // Contraseña de la base de datos

// Crear la conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
