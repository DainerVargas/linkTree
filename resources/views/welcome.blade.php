<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="scss\app.scss">

    @vite('resources/scss/app.scss')

    <title>Blue Eyes</title>
</head>

<body>
    <main class="main">
        <div class="conte_config">
            <span class="material-symbols-outlined icono-config" id="toggleLogin">settings</span>

            <div class="conte_login" id="loginCard">
                <a href="{{route('login')}}">
                    <span class="material-symbols-outlined">login</span>
                    Iniciar sesión
                </a>
                <div class="conte_create">
                    <small>¿Deseas crear una cuenta?</small>
                    <a href="https://wa.me/message/ZXQJS5VVBXFXP1">Contactarme</a>
                </div>
            </div>
        </div>

        <section class="profile">
            <div class="container">
                <img class="logo" src="{{ asset('images/Logo  Beit.svg') }}" alt="">

                <div class="links">
                    <a href="https://www.tiktok.com/@beit_peru?_t=ZM-8xGmzmIUXkW&_r=1" target="_blank"> <img
                            src="{{ asset('iconos/Tiktok.png') }}" alt=""> <span>Tiktok</span>
                    </a>
                    <a href="https://www.facebook.com/beitperu?mibextid=wwXIfr&mibextid=wwXIfr" target="_blank">
                        <img src="{{ asset('iconos/facebook.png') }}" alt=""> <span>Facebook</span>
                    </a>
                    <a href="https://www.instagram.com/beit_peru?igsh=bXl1eTJldDJkbjdw&utm_source=qr" target="_blank">
                        <img src="{{ asset('iconos/Instagram.png') }}" alt=""> <span>Instagram</span>
                    </a>
                    <a href="https://youtube.com/@blueeyesinnovationtech-mj6ne?si=dYhX222vCPxFpBk5" target="_blank">
                        <img src="{{ asset('iconos/youtube.png') }}" alt="">
                        <span>Youtube</span>
                    </a>
                    <a href="https://www.linkedin.com/company/blue-eyes-innovation-tech" target="_blank">
                        <img src="{{ asset('iconos/linkedin.png') }}" alt=""> <span>Linkedin</span>
                    </a>
                </div>
            </div>

            @livewire('button-brochure')

        </section>

        @yield('brochure')

        @livewire('share-link')

        <footer>
            © Todos los derechos reservados Hecho por Beit Perú
        </footer>
    </main>
    @livewireScripts

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const toggleBtn = document.getElementById("toggleLogin");
            const loginCard = document.getElementById("loginCard");

            toggleBtn.addEventListener("click", () => {
                loginCard.classList.toggle("show");
            });
        });
    </script>

</body>

</html>
