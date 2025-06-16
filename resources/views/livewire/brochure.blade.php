<section>
    <style>
        #brochure {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.529);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        #container {
            width: 40vw;
            height: 80vh;
            background-color: #fff;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        .head_brocure {
            text-align: center;
            background: #f1f1f1;
            font-family: sans-serif;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10px;
            box-sizing: border-box;
            height: 60px;
        }

        .head_brocure h3,
        .head_brocure span {
            color: #000;
        }

        .head_brocure span {
            cursor: pointer;
            user-select: none;
        }

        #flipbookPDFContainer {
            flex: 1;
            width: 100%;
            height: 100%;
            background-color: #fff;
        }

        .link_pdf {
            display: flex;
            justify-content: center;
            align-content: center;
            text-decoration: none;
        }

        .btn_view {
            margin: 10px auto 20px;
            padding: 10px 25px;
            font-size: 18px;
            font-weight: 600;
            box-sizing: border-box;
            width: 90%;
            background-color: #000;
            color: white;
            border: none;
            border-radius: 18px;
            cursor: pointer;
        }
    </style>

    @if ($view)
        <section class="brochure">
            <section id="brochure">
                <div id="container">
                    <div class="head_brocure">
                        <span class="material-symbols-outlined">
                            ios_share
                        </span>
                        <h3>Brochure corporativo Aliath</h3>
                        <span wire:click="close" class="material-symbols-outlined close-btn">
                            close
                        </span>
                    </div>
                    <div id="flipbookPDFContainer">l</div>
                    <a class="link_pdf" target="_blank" href="Document/BrochureBEIT2025.pdf">
                        <button class="btn_view">View</button>
                    </a>
                </div>
            </section>
        </section>
    @endif
</section>
