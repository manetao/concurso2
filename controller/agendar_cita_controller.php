<?php
// Agendar Cita - agendar_cita_controller.php

require_once('conexion.php'); // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir los datos del formulario
    $paciente_cita = $_POST['paciente_cita'];
    $medico_cita = $_POST['medico_cita'];
    $dia_cita = $_POST['dia_cita'];
    $hora_cita = $_POST['hora_cita'];
    $estado_cita = $_POST['estado_cita'];

    // Validar que todos los campos estén completos
    if (empty($paciente_cita) || empty($medico_cita) || empty($dia_cita) || empty($hora_cita) || empty($estado_cita)) {
        echo "Por favor, complete todos los campos.";
        exit;
    }

    // Convertir la fecha y hora en un formato adecuado si es necesario
    $fecha_cita = $dia_cita . ' ' . $hora_cita;

    // Insertar la cita en la base de datos
    $query = "INSERT INTO cita (dia_cita, hora_cita, paciente_cita, medico_cita, estado_cita) 
              VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sssss', $fecha_cita, $hora_cita, $paciente_cita, $medico_cita, $estado_cita);

    if ($stmt->execute()) {
        echo "Cita agendada con éxito.";
        // Redirigir al usuario a una página de confirmación o a su panel
        header("Location: homeusers.php");
        exit;
    } else {
        echo "Hubo un error al agendar la cita. Intenta nuevamente.";
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>
