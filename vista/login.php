<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Agregar Font Awesome para los iconos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-6 col-lg-4">
                <!-- Formulario de inicio de sesión -->
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-5 bg-primary text-white text-center">
                            <!-- Imagen del aplicativo -->
                            <img src="https://previews.123rf.com/images/simoniya/simoniya1803/simoniya180300005/96717043-un-logotipo-para-la-cl%C3%ADnica-empresa-farmac%C3%A9utica-logotipo-del-m%C3%A9dico-de-familia-primeros-auxilios.jpg" class="img-fluid mt-4" alt="Logo de la Clínica">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h3 class="card-title text-center mb-4">Iniciar sesión</h3>
                                <form action="LoginController.php?action=login" method="POST">
                                    <!-- Cédula -->
                                    <div class="mb-3">
                                        <label for="cedula" class="form-label">Cédula</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                            <input type="text" class="form-control" id="cedula" name="cedula" required>
                                        </div>
                                    </div>

                                    <!-- Contraseña -->
                                    <div class="mb-3">
                                        <label for="contrasena" class="form-label">Contraseña</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                            <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                                </form>
                                <p class="mt-3 text-center">¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (con dependencias) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>