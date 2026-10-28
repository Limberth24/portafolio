<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugueteria El Trompo</title>
</head>
<body>

    <header class="marca" id="inicio">
        <h1>Jugueteria El Trompo</h1>
        <p>Los mejores juguetes del barrio ahora con inventario digital</p>
    </header>

    <nav class="nav">
        <ul>
            <li><a href="/inicio">Inicio</a></li>
            <li><a href="/sobre-mi">Sobre Mí</a></li>
            <li><a href="/servicios">Servicios</a></li>
            <li><a href="/proyectos">Proyectos</a></li>
            <li><a href="/contacto">Contacto</a></li>
            <li><a href="/juguetes">Juguetes</a></li>
        </ul>
    </nav>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>Integradora - Limberth Mamani Tola - 27 de octubre de 2026</p>
    </footer>

</body>
</html>