<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Header con Menú Responsivo</title>
<style>
/* Estilos base */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.header {
    background-color: #333;
    color: #fff;
    padding: 20px;
}

.header h1, .header nav {
    margin: 0;
    display: inline-block;
}

.header nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.header nav ul li {
    display: inline;
    margin-right: 20px;
}

.header nav ul li a {
    color: #fff;
    text-decoration: none;
}

/* Estilos responsivos */
@media screen and (max-width: 768px) {
    .header {
        text-align: center;
    }
    .header nav {
        display: block;
        margin-top: 10px;
    }
    .header nav ul li {
        display: block;
        margin-bottom: 10px;
    }
}
</style>
</head>
<body>

<header class="header">
    <h1>Encabezado con Menú Responsivo</h1>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Acerca</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
</header>

</body>
</html>
