<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="users.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <!-- Logo del Panel de Administración -->
            <a class="navbar-brand" href="admin-dashboard.php">
                <img src="https://previews.123rf.com/images/simoniya/simoniya1803/simoniya180300005/96717043-un-logotipo-para-la-cl%C3%ADnica-empresa-farmac%C3%A9utica-logotipo-del-m%C3%A9dico-de-familia-primeros-auxilios.jpg" alt="Logo">
            </a>

            <!-- Botón para el menú en dispositivos móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú de navegación -->
            <div class="collapse navbar-collapse" id="navbarAdmin">
                <ul class="navbar-nav ms-auto">
                    <!-- Enlace al Dashboard de Administración -->
                    <li class="nav-item">
                        <a class="nav-link" href="homeadmin.php">Inicio</a>
                    </li>

                    <!-- Enlace para Cerrar Sesión -->
                    <li class="nav-item">
                        <a class="nav-link btn-logout" href="logout.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Contenido principal -->
    <div class="container-fluid mt-5">
        <h2 class="text-center mb-5">Panel de Administración</h2>

        <div class="row">

            <!-- Lista de Usuarios -->
            <div class="col-md-4">
                <div class="card card-custom" style="border: 2px solid #D69B00; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <i class="fas fa-users card-icon" style="font-size: 30px;"></i>
                        <h5 class="card-title">Lista de Usuarios</h5>
                        <p>Gestiona todos los usuarios registrados en el sistema.</p>
                        <a href="usuarios.php" class="btn btn-primary">Ver Usuarios</a>
                    </div>
                </div>
            </div>

            <!-- Áreas -->
            <div class="col-md-4">
                <div class="card card-custom" style="border: 2px solid #D69B00; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <i class="fas fa-hospital card-icon" style="font-size: 30px;"></i>
                        <h5 class="card-title">Áreas</h5>
                        <p>Gestiona las áreas del hospital o clínica.</p>
                        <a href="areas.php" class="btn btn-primary">Ver Áreas</a>
                    </div>
                </div>
            </div>

            <!-- Citas -->
            <div class="col-md-4">
                <div class="card card-custom" style="border: 2px solid #D69B00; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                    <div class="card-body">
                        <i class="fas fa-calendar-alt card-icon" style="font-size: 30px;"></i>
                        <h5 class="card-title">Citas</h5>
                        <p>Gestiona las citas médicas programadas.</p>
                        <a href="citas.php" class="btn btn-primary">Ver Citas</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Sección adicional de Administración -->
        <div class="row mt-4">

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>