<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio - Limberth Mamani Tola | Ingeniero de Sistemas</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>
<body>

    <header class="marca" id="inicio">
        <h1>Limberth Mamani Tola — Ingeniero de Sistemas</h1>
        <p>Desarrollo de software, análisis y soluciones tecnológicas</p>
    </header>

    <nav class="nav">
        <button id="btn-menu">☰</button>
        <ul>
            <li><a href="/inicio">Inicio</a></li>
            <li><a href="/sobre-mi">Sobre Mí</a></li>
            <li><a href="/servicios">Servicios</a></li>
            <li><a href="/proyectos">Proyectos</a></li>
            <li><a href="/contacto">Contacto</a></li>
        </ul>
        <button id="btn-tema">Modo noche</button>
        @auth
            <a href="/panel" id="btn-acceso">Panel</a>
        @else
            <a href="/login" id="btn-acceso">Acceso</a>
        @endauth
    </nav>

    <main>
        @yield('contenido')

    </main>

    <footer>
        <p class="footer-marca">Limberth Mamani Tola | Ingeniero de Sistemas</p>
        <p>© 2026 — Todos los derechos reservados</p>
        <p><a href="mailto:limberthtola20@gmail.com">limberthtola20@gmail.com</a> · <a href="https://github.com/Limberth24" target="_blank">GitHub</a></p>
    </footer>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>