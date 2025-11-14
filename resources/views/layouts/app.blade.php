<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts / Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="app">

        <!-- NAVBAR UNAB -->
        <nav class="navbar-unab">
            <div class="navbar-container">

                <!-- LOGO -->
                <a href="/" class="navbar-logo">
                    <img src="/image/logoUnab.jpg" alt="UNAB Logo">
                </a>

                <!-- LINKS -->
                <div class="navbar-links">
                    <a href="/">Inicio</a>

                    <!-- PERFIL DE USUARIO -->
                    @auth
                        <div class="dropdown" style="display:inline-block;">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endauth
                </div>

            </div>
        </nav>

        <!-- MAIN CONTENT -->
        <main>
            @yield('content')
        </main>

        <!-- FOOTER UNAB -->
        <footer class="footer-unab">
            <div class="footer-container">
                <div class="footer-info">
                    <p class="footer-title">Universidad Autónoma de Bucaramanga</p>
                    <p>© 2025 Todos los derechos reservados.</p>
                    <p>Cra. 48 # 48-27, Bucaramanga, Santander</p>
                    <p>PBX: (607) 643 6111</p>
                </div>
            </div>
        </footer>

    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
