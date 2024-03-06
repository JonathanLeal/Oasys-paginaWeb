<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'OASYS')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
    <link rel="stylesheet" href="estilos.css">
  

</head>
<body>
    
    <!-- Header -->
    <header>
    <nav class="navbar navbar-expand-md navbar-light bg-cabecera">
        <div class="container-fluid">
            <!-- Logotipo a la izquierda -->
            <div class="navbar-collapse collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <img src="imagenes/logo.png" style="max-height: 80px;">
                    </li>
                </ul>
            </div>
            <!-- Botón de hamburguesa para dispositivos móviles -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Elementos del menú a la derecha -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#">Casos de Éxito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#">Software</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#">Publicaciones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

    

    <!-- Contenido principal -->
    @yield('content')
    <div class="container">
        <div class="box">
           <h1 class="display-1 text-left custom-heading">OASYS</h1>
           <h3>Online Audit System</h3>
        </div>
        <div class="box">
            <img class="rotating-image mr-auto" src="images/imagen.png" style="max-height: 100%;">
        </div>
    </div>

  

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-4">
        <div class="container">
            <p>© {{ date('Y') }} OASYS. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Cuando el documento esté listo
        $(document).ready(function () {
            // Función para rotar la imagen
            function rotateImage() {
                $(".rotating-image").css({
                    // Rotar 360 grados
                    transform: 'rotate(360deg)'
                }).animate({
                    // Usar una propiedad no existente para evitar que jQuery haga nada, solo se usará la transformación CSS
                    dummy: 0
                }, {
                    // Duración de la animación
                    duration: 2000,
                    // Función para ejecutar después de completar la animación
                    complete: function () {
                        // Cuando la animación termine, reiniciar la rotación
                        $(this).css('transform', 'rotate(0deg)');
                        rotateImage(); // Llamada recursiva para mantener la rotación continua
                    }
                });
            }

            // Iniciar la rotación de la imagen
            rotateImage();
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
</body>
</html>