<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite('resources/scss/app.scss')

    <title>LinkTree</title>
</head>

<body>
    <main class="main">
        <section class="profile">
            <div class="conte_menu">
                <div class="menu">
                    <span class="material-symbols-outlined">
                        more_vert
                    </span>
                </div>
            </div>

            <div class="container">
                <img class="logo" src="{{ asset('images/Logo.png') }}" alt="">

                <h3 class="email">
                    <span>@</span><span>I</span><span>n</span><span>v</span><span>e</span><span>r</span><span>s</span><span>i</span><span>o</span><span>n</span><span>e</span><span>s</span><span>_</span><span>A</span><span>l</span><span>i</span><span>a</span><span>t</span><span>h</span>
                </h3>


                <div class="links">
                    <a href="https://www.instagram.com/inversionesaliath/" target="_blank"> <img
                            src="{{ asset('iconos/Instagram.png') }}" alt=""> <span>Instagram</span>
                    </a>
                    <a href="https://www.facebook.com/inversionesaliath/?locale=es_LA" target="_blank"> <img
                            src="{{ asset('iconos/facebook.png') }}" alt=""> <span>facebook</span>
                    </a>
                    <a href="https://www.tiktok.com/@inversionesaliath" target="_blank">
                        <img src="{{ asset('iconos/whatsapp.png') }}" alt=""> <span>whatsapp</span>
                    </a>
                    <a href="https://www.youtube.com/@inversionesaliath" target="_blank">
                        <img src="{{ asset('iconos/youtube.png') }}" alt="">
                        <span>Youtube</span>
                    </a>
                </div>
            </div>

            <div class="information">
                <p id="text">Conoce más sobre nosotros</p>

                @livewire('button-brochure')
            </div>

            <div class="contact container_buttons">
                <p id="text">Contáctanos</p>
                <button id="btn"><span></span> Déjanos un mensaje<span class="material-symbols-outlined point">
                        more_vert
                    </span></button>
            </div>

        </section>

        @livewire('brochure')
        @livewire('share-link')

    </main>

    @livewireScripts
    <script src="/vendor/dearflip/js/libs/jquery.min.js"></script>
    <script src="/vendor/dearflip/js/dflip.min.js"></script>

    <script>
        window.addEventListener('load', function() {
            setTimeout(() => {
                const $container = $("#flipbookPDFContainer");

                if ($container != null) {
                    try {
                        $container.flipBook("/Document/BrochureBEIT2025.pdf", {
                            webgl: true,
                            showCover: true,
                            showTurnPage: true,
                            pageBackground: "#fff",
                            autoPlay: true,
                            responsive: true,
                        });
                        console.log("Flipbook inicializado con éxito");
                    } catch (e) {
                        console.error("Error al inicializar flipbook:", e);
                    }
                } else {
                    console.warn("Contenedor no disponible o ya inicializado");
                }
            }, 500);
        });
    </script>
</body>

</html>
