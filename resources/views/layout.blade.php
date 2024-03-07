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
    <header class="header"><!--agregar fixed top para fijar el menu-->
        <img class="imagenLogo" src="imagenes/logo.png" style="max-height: 90px;">
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Casos de Éxito</a></li>
                <li><a href="#">Software</a></li>
                <li><a href="#">Publicaciones</a></li> <!-- Agregado el cierre de la etiqueta 'a' -->
            </ul>
        </nav>
    </header>

    <!-- Contenido principal -->
    @yield('content')

    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-4">
        <div class="container">
            <p>© {{ date('Y') }} OASYS. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
