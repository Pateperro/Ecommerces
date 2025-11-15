<nav class="navbar-unab">
    <div class="navbar-container">

        <!-- LOGO -->
        <a href="/" class="navbar-logo">
            <img src="/image/logoUnab.jpg" alt="UNAB Logo">
        </a>

        <!-- LINKS -->
        <div class="navbar-links">
            <a href="{{route('welcome')}}">Inicio</a>
            <a href="{{route('admin.index')}}">Admin</a>
            
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
