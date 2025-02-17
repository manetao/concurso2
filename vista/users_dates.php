<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Citas</title>
    <link rel="stylesheet" href="users.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Estilo para el botón de Cerrar Sesión */
        .btn-logout {
            background-color: #dc3545;
            color: white;
            border: 1px solid #dc3545;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 500;
            display: flex;
            align-items: center;
            /* Alineación de texto e ícono */
            gap: 8px;
            /* Espacio entre el ícono y el texto */
        }

        .btn-logout:hover {
            background-color: white;
            color: #dc3545;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            /* Sombra en hover */
            transform: translateY(-3px);
            /* Efecto hover */
            transition: all 0.3s ease;
            /* Transición suave */
        }

        .btn-logout i {
            font-size: 1.2rem;
            /* Tamaño del ícono */
        }

        .card-custom {
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-icon {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        /* Estilos para la barra de navegación */
        .navbar {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            /* Fondo degradado atractivo */
            border-radius: 0 0 15px 15px;
            /* Bordes redondeados en la parte inferior */
        }

        .navbar-brand img {
            height: 40px;
            /* Ajustar tamaño del logo */
            margin-right: 15px;
        }

        .navbar-nav .nav-item .nav-link {
            color: white !important;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #ffc107 !important;
            transform: translateY(-3px);
            /* Efecto hover para los enlaces */
            transition: transform 0.3s ease;
        }

        .navbar-toggler-icon {
            background-color: white;
            /* Cambiar color del icono del menú */
        }

        .btn-logout {
            background-color: #dc3545;
            color: white;
            border: 1px solid #dc3545;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 500;
        }

        .btn-logout:hover {
            background-color: white;
            color: #dc3545;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            /* Sombra en hover */
        }

        /* Estilos adicionales para las cards */
        .card-custom {
            border: 1px solid #007bff;
            /* Borde de las tarjetas */
            border-radius: 10px;
            /* Bordes redondeados */
            background-color: #f2f7ff;
            /* Fondo de color suave */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Transición */
        }

        .card-custom:hover {
            transform: translateY(-10px);
            /* Efecto al pasar el mouse */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .card-icon {
            font-size: 2rem;
            color: #007bff;
            /* Color para el ícono */
        }

        .card-title {
            font-weight: bold;
        }

        .card-body {
            padding: 2rem;
            /* Espaciado dentro de las tarjetas */
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="homeusers.php">
                <img src="https://previews.123rf.com/images/simoniya/simoniya1803/simoniya180300005/96717043-un-logotipo-para-la-cl%C3%ADnica-empresa-farmac%C3%A9utica-logotipo-del-m%C3%A9dico-de-familia-primeros-auxilios.jpg" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarAdmin">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="homeusers.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="users_dates.php">Agendar Cita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-logout" href="login.php">
                            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="text-center mb-4">Formulario para Agendar Cita</h2>
        <form action="../controller/agendar_cita_controller.php" method="POST">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="paciente_cita" class="form-label">Paciente</label>
                    <input type="text" class="form-control" id="paciente_cita" name="paciente_cita" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="medico_cita" class="form-label">Médico</label>
                    <input type="text" class="form-control" id="medico_cita" name="medico_cita" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="dia_cita" class="form-label">Día de la Cita</label>
                    <input type="date" class="form-control" id="dia_cita" name="dia_cita" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="hora_cita" class="form-label">Hora de la Cita</label>
                    <input type="time" class="form-control" id="hora_cita" name="hora_cita" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="estado_cita" class="form-label">Estado de la Cita</label>
                <select class="form-select" id="estado_cita" name="estado_cita" required>
                    <option value="pendiente">Pendiente</option>
                    <option value="confirmada">Confirmada</option>
                    <option value="cancelada">Cancelada</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary w-50">Agendar Cita</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
