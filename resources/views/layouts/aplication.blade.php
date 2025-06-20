@extends('dashboard')
@section('title', 'dashboard')

@section('dashboard')
    <div id="main" class="main">
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
        @livewire('share-link')
    </div>
@endsection
