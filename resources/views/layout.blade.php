<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'OASYS')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
</head>
    

<body>
    <!-- Header -->
    <header class="header"><!--agregar fixed top para fijar el menu-->
        <img class="imagenLogo" src="imagenes/BLANCO.png" style="max-height: 90px;">
        <nav>
            <ul>
                <li><a href="{{ url('/home') }}">Inicio</a></li>
                <li><a href="{{ url('/nosotros') }}">Nosotros</a></li>
                <li><a href="#">Casos de Éxito</a></li>
                <li><a href="#">Software</a></li>
                <li><a href="#">Publicaciones</a></li> <!-- Agregado el cierre de la etiqueta 'a' -->
            </ul>
        </nav>
    </header>

    <!-- Contenido principal -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-4 fixed">
        <div class="container">
            <div class="row align-items-center  pt-3 pb-3">
                <div class="col-md-4">
                    <img class="logo-footer" src="imagenes/logo.png" style="max-height: 110px;">
                </div>
               
                <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                    <h5>Contáctanos:</h5><br>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <p class="pl-2 mb-0">+503(6858-5513)</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-mouse-pointer" aria-hidden="true"></i>
                        <p class="pl-2 mb-0">www.oasys.com</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <p>© {{ date('Y') }} OASYS. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
