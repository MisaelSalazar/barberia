<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Barberia</title>

    <!-- Frameworks -->
    <link rel="stylesheet" href="public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/fontawesome/all.css">

    <!-- Estilos propios -->
    <link rel="stylesheet" href="style/all.css">
</head>

<body>

    <div id="contenedorPrincipal" class="row">

        <div id="navegador" class="col-2 collapse show h-100" data-bs-theme="dark">
            <div data-bs-theme="dark">
                <div class="bg-dark p-4">
                    <nav class="p-1">
                    <img src="img/logo.jpg" class="rounded mx-auto d-block" width="80%" height="80%">
                        <ul class="h5">
                            <li class="list-group-item pt-5">
                                <a href="#" class="text-decoration-none text-white d-block">
                                    <i class="fa-solid fa-house"></i> Inicio
                                </a>
                            </li>
                            <li class="list-group-item pt-4">
                                <a href="#" class="text-decoration-none text-white d-block">
                                    <i class="fa-regular fa-calendar"></i> Agenda
                                </a>
                            </li>
                            <li class="list-group-item pt-4">
                                <a href="#" class="text-decoration-none text-white d-block">
                                    <i class="fa-solid fa-user"></i> Clientes
                                </a>
                            </li>
                            <li class="list-group-item pt-4">
                                <a href="#" class="text-decoration-none text-white d-block">
                                    <i class="fa-solid fa-list-ol"></i> Lista Cortes
                                </a>
                            </li>
                            <li class="list-group-item pt-4">
                                <a href="#" class="text-decoration-none text-white d-block">
                                    <i class="fa-solid fa-store"></i> Productos
                                </a>
                            </li>
                            <li class="list-group-item pt-4">
                                <a href="#" class="text-decoration-none text-white d-block">
                                    <i class="fa-solid fa-file-invoice-dollar"></i> Ganancias
                                </a>
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div id="principal" class="col-10">

            <nav class="navbar navbar-dark bg-primary">
                <div class="container-fluid">
                    <button id="colapsar" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navegador" aria-controls="navbarToggleExternalContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="perfil">

                        <!-- <h1 class="text-white">Panel De Control Salazar Barberia</h1> -->
                        <p class="text-white h3">User <i class="fa-solid fa-circle-user"></i></p>
                    </div>
                </div>

            </nav>



            <div id="contenido" class="container-fluid">
                <div class="row">

                </div>
            </div>

        </div>
    </div>


    <footer>

    </footer>


    <!-- Scripts Frameworks -->
    <script src="public/bootstrap/bootstrap.min.js"></script>
    <script src="public/fontawesome/all.js"></script>
    <script src="scripts/all.js"></script>
</body>

</html>