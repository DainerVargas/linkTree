<div class="container_buttons">
    <div class="information">
        <p id="text">Conoce más sobre nosotros</p>
        <button id="btn"><small></small>
            <span wire:click="show(1)">
                Brochure corporativo Beit
            </span>
            <span wire:click="show_section(1)" class="material-symbols-outlined point">
                more_vert
            </span>
        </button>
        <button id="btn"><small></small>
            <a href="https://beitperu.com/">
                Página Web
            </a>
            <span wire:click="show_section(2)" class="material-symbols-outlined point">
                more_vert
            </span>
        </button>
    </div>

    <div class="contact container_buttons">
        <p id="text">Contáctanos</p>
        <button id="btn"><small></small>
            <a href="https://wa.me/message/ZXQJS5VVBXFXP1">
                Déjanos un mensaje
            </a>
            <span wire:click="show_section(3)" class="material-symbols-outlined point">
                more_vert
            </span>
        </button>
    </div>
</div>
