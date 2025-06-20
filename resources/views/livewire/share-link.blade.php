<div>
    @if ($section != 0)
        <section class="share_link">
            <div class="modal">
                <div class="head">
                    <span></span>
                    <p>Share link</p>
                    <span wire:click="close" class="material-symbols-outlined close-btn">
                        close
                    </span>
                </div>
                @if ($section == 1)
                    <h2>Blue Eyes Innovation Tech</h2>
                @elseif($section == 2)
                    <a href="https://beitperu.com/">
                        <div class="conte_about">
                            <img src="{{ asset('images//Logo  Beit.svg') }}" alt="">
                            {{-- <h3>BLUE EYES IT</h3> --}}
                            <a href="https://beitperu.com/">beitperu/</a>
                            @if ($title == 'More')
                                <small>{{ \Illuminate\Support\Str::limit($about, 116, '...') }} </small>
                            @else
                                <small>{{ $about }}</small>
                            @endif
                            <button wire:click="show_text({{ $show }})">{{ $title }}</button>

                        </div>
                    </a>
                @elseif($section == 3)
                    <a href="https://wa.me/message/ZXQJS5VVBXFXP1">
                        <div class="conte_about">
                            <img src="{{ asset('images/profile.png') }}" alt="">
                            <h3>~Blue Eyes Innovation Tech</h3>
                            <a href="https://wa.me/message/ZXQJS5VVBXFXP1">wa.link/beit</a>
                            <p>Business Account</p>
                        </div>
                    </a>
                @endif

                <div class="icons">
                    <div class="scroll">
                        {{-- <div class="conte_ico">
                            <i class="fas fa-link link"></i>
                            <small class="copy">Copy link</small>
                        </div> --}}
                        <div class="conte_ico">
                            <a href="https://www.facebook.com/beitperu?mibextid=wwXIfr&mibextid=wwXIfr">
                                <i class="fab fa-facebook facebook"></i>
                                <small>Facebook</small>
                            </a>
                        </div>
                        <div class="conte_ico">
                            <a href="https://wa.me/message/ZXQJS5VVBXFXP1">
                                <i class="fab fa-whatsapp whatsapp"></i>
                                <small>Whatsapp</small>
                            </a>
                        </div>
                        <div class="conte_ico">
                            <a href="https://www.instagram.com/beit_peru?igsh=bXl1eTJldDJkbjdw&utm_source=qr">
                                <i class="fab fa-instagram instagram"></i>
                                <small>Instagram</small>
                            </a>
                        </div>
                        <div class="conte_ico">
                            <a href="https://www.tiktok.com/@beit_peru?_t=ZM-8xGmzmIUXkW&_r=1">
                                <i class="fab fa-tiktok tiktok"></i>
                                <small>Tiktok</small>
                            </a>
                        </div>
                        <div class="conte_ico">
                            <a href="https://youtube.com/@blueeyesinnovationtech-mj6ne?si=dYhX222vCPxFpBk5">
                                <i class="fab fa-youtube youtube"></i>
                                <small>Youtube</small>
                            </a>
                        </div>
                       {{--  <div class="conte_ico">
                            <a href="">
                                <i class="fab fa-facebook-messenger messenger"></i>
                                <small>Messenger</small>
                            </a>
                        </div> --}}
                        <div class="conte_ico">
                            <a href="https://www.linkedin.com/company/blue-eyes-innovation-tech">
                                <i class="fab fa-linkedin linkedin"></i>
                                <small>Linkedin</small>
                            </a>
                        </div>
                        {{-- <div class="conte_ico">
                            <a href="">
                                <i class="fab fa-snapchat snapchat"></i>
                                <small>Snapchat</small>
                            </a>
                        </div> --}}
                        {{-- <div class="conte_ico">
                            <a href="">
                                <i class="fas fa-envelope email"></i>
                                <small>Email</small>
                            </a>
                        </div> --}}
                    </div>
                </div>
        </section>
    @endif
</div>
