<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicativo para Agendar Citas</title>
    <link rel="stylesheet" href="users.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Estilos para la barra de navegación */
        .navbar {
            background-color: #007bff;
        }

        .navbar-brand img {
            height: 40px;
            /* Controlamos el tamaño del logo */
        }

        .navbar-nav .nav-item .nav-link {
            color: white !important;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #ffc107 !important;
        }

        .btn-logout {
            background-color: #dc3545;
            color: white;
            border: 1px solid #dc3545;
        }

        .btn-logout:hover {
            background-color: white;
            color: #dc3545;
        }
    </style>
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="https://previews.123rf.com/images/simoniya/simoniya1803/simoniya180300005/96717043-un-logotipo-para-la-cl%C3%ADnica-empresa-farmac%C3%A9utica-logotipo-del-m%C3%A9dico-de-familia-primeros-auxilios.jpg" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="agendar-cita.php">Agendar Cita</a>
                    </li>
                    <!-- Aquí el botón de cerrar sesión -->
                    <li class="nav-item">
                        <a class="nav-link btn-logout" href="logout.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- El contenido de la página -->
    <div class="container-fluid mt-5">
        <h2 class="text-center mb-5">Bienvenido al Sistema de Agendamiento de Citas Médicas</h2>

        <div class="row">
            <!-- Agendar Citas -->
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <i class="fas fa-calendar-check card-icon"></i>
                        <h5 class="card-title">Agendar Cita</h5>
                        <p>Agenda tu cita médica de forma rápida y sencilla.</p>
                        <a href="agendar-cita.php" class="btn btn-primary">Agendar Cita</a>
                    </div>
                </div>
            </div>

            <!-- Médicos Especializados -->
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <i class="fas fa-user-md card-icon"></i>
                        <h5 class="card-title">Médicos Especializados</h5>
                        <p>Contamos con médicos de diferentes especialidades para brindarte la mejor atención.</p>
                        <a href="especialidades.php" class="btn btn-primary">Ver Especialidades</a>
                    </div>
                </div>
            </div>

            <!-- Salas de Consulta -->
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <i class="fas fa-clinic-medical card-icon"></i>
                        <h5 class="card-title">Salas de Consulta</h5>
                        <p>Tenemos 5 salas de consulta disponibles para atenderte rápidamente.</p>
                        <a href="salas-consulta.php" class="btn btn-primary">Ver Disponibilidad</a>
                    </div>
                </div>
            </div>

            <!-- Salas de Espera -->
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <i class="fas fa-procedures card-icon"></i>
                        <h5 class="card-title">Salas de Espera</h5>
                        <p>Contamos con 2 cómodas salas de espera para tu conveniencia.</p>
                        <a href="salas-espera.php" class="btn btn-primary">Ver Disponibilidad</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Área de Admisión y Registro -->
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <i class="fas fa-hospital-user card-icon"></i>
                        <h5 class="card-title">Área de Admisión y Registro</h5>
                        <p>En este área podrás registrarte y acceder a todos nuestros servicios.</p>
                        <a href="registro.php" class="btn btn-primary">Registrar Nueva Cita</a>
                    </div>
                </div>
            </div>

            <!-- Área de Gestión y Administración -->
            <div class="col-md-4">
                <div class="card card-custom">
                    <div class="card-body">
                        <i class="fas fa-cogs card-icon"></i>
                        <h5 class="card-title">Área de Gestión y Administración</h5>
                        <p>Accede a funciones de gestión y administración de citas y horarios.</p>
                        <a href="gestion.php" class="btn btn-primary">Administrar Citas</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>