<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <title>@yield('title' ?? 'Dashboard')</title>

    @vite('resources/scss/dashboard.scss')
    @vite('resources/scss/app.scss')
</head>

<body>
    <header class="header">
        <h2 class="nameBusiness">BLUE EYES</h2>
        <div class="conte_business">
            <img class="logo" src="{{ asset('images/Logo  Beit.svg') }}" alt="">
            <h3><span>Bienvenido,</span> Admin</h3>
        </div>
    </header>

    <main>
        <section class="conte_menu">
            <div class="menu">
                <ul class="list">
                    <a href="{{ route('dashboard') }}">
                        <span class="material-symbols-outlined">
                            home
                        </span>
                        <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Principal</li>
                    </a>
                    <a href="{{ route('profile') }}">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                        <li class="{{ request()->routeIs( 'profile') ? 'active' : '' }}">Perfil</li>
                    </a>
                    <a href="{{ route('business') }}">
                        <span class="material-symbols-outlined">
                            domain
                        </span>
                        <li class="{{ request()->routeIs( 'business') ? 'active' : '' }}">Empresa</li>
                    </a>
                    <a href="{{ route('networs') }}">
                        <span class="material-symbols-outlined">
                            language
                        </span>
                        <li class="{{ request()->routeIs('networs') ? 'active' : '' }}">Redes Sociales</li>
                    </a>

                    @if ($user->rol_id == 1)
                        <a href="">
                            <span class="material-symbols-outlined">
                                group
                            </span>
                            <li class="{{ request()->routeIs(patterns: 'users') ? 'active' : '' }}">Usuarios</li>
                        </a>
                    @endif

                    <a class="logout" href="{{ route('logout') }}">
                        <span class="material-symbols-outlined">
                            logout
                        </span>
                        <li class="{{ request()->routeIs( 'logout') ? 'active' : '' }}">Cerrar sesion</li>
                    </a>
                </ul>
            </div>
            <small class="privacy">© Todos los derechos reservados Hecho por Beit Perú</small>
        </section>

        <section class="sections">
            @yield('dashboard')
            @yield('profile')
            @yield('business')
            @yield('networs')
        </section>
    </main>
</body>

</html>
