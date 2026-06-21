<style>
    @import url('https://fonts.googleapis.com/css2?family=Anton&family=Chakra+Petch:ital,wght@1,700&display=swap');

    :root {
        --dark-purple: #f0c400;
        --light-purple: #ffea00;
    }

    @font-face {
        font-family: 'ds-digital';
        src: url('/storage/font/DS-DIGI.TTF');
    }

    @font-face {
        font-family: 'stencil';
        src: url('/storage/font/Stencil-Regular.ttf');
    }

    @font-face {
        font-family: 'airstrike';
        src: url('/storage/font/airstrike.ttf');
    }


    * {
        padding: 0%;
        margin: 0%;
        box-sizing: border-box;
    }

    .font-anton {
        font-family: 'Anton', sans-serif;
    }

    .font-chakra {
        font-family: "Chakra Petch", Arial, Helvetica, sans-serif;
    }

    .cta-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: .5rem;


    }

    .button-gradient {
        border-radius: 12px;
        background-image: -moz-linear-gradient(90deg, #fff47a 0%, #ffea00 55%, #cfa800 100%);
        background-image: -webkit-linear-gradient(90deg, #fff47a 0%, #ffea00 55%, #cfa800 100%);
        background-image: -ms-linear-gradient(90deg, #fff47a 0%, #ffea00 55%, #cfa800 100%);
        box-shadow: inset 6px 6px 4px #ffffff80, inset -4px -4px 8px black;
        font-family: 'Chakra Petch', sans-serif;
        z-index: 33;
        font-size: 1.5vw;
        text-shadow: 2px 2px 4px black;
    }

    .nav-link, #mainNavbar > div.offcanvas-body > ul > li:nth-child(1) > a {
        color: #000000;
    }

    .button-gradient:hover {
        box-shadow: 2px 2px 8px #fff47a, -2px -2px 8px #cfa800;
        cursor: pointer;
        color: white !important;
    }

    .button-profile {
        border-radius: 12px;
        background-image: -moz-linear-gradient(90deg, rgb(0, 181, 253) 0%, rgb(0, 195, 255) 50%, rgb(0, 104, 136) 100%);
        background-image: -webkit-linear-gradient(90deg, rgb(0, 181, 253) 0%, rgb(0, 195, 255) 50%, rgb(0, 104, 136) 100%);
        background-image: -ms-linear-gradient(90deg, rgb(0, 181, 253) 0%, rgb(0, 195, 255) 50%, rgb(0, 104, 136) 100%);
        box-shadow: 0px 3px 2.91px 0.09px rgba(0, 0, 0), inset #ffffff40 2px 2px 4px, inset -2px -2px 4px black;
        font-family: 'Chakra Petch', sans-serif;
        z-index: 33;
        font-size: 1.5vw;
        text-shadow: 4px 4px 2px black;
    }

    /* START HEADER  */
    .font-digital {
        font-family: 'ds-digital'
    }

    .font-airstrike {
        font-family: 'airstrike'
    }

    .navbar-container {
        background: var(--dark-purple);
        box-shadow: 0px 8px 8px black;
    }

    nav {
        border-top: 2px solid white;
    }

    nav .nav-item {
        padding-inline: 1rem;
        border-inline: 1px solid white;
        justify-content: center;
        font-size: clamp(.8rem, 15vw, 1.25rem);
    }

    nav .nav-item:hover {
        background: #ffffff70;
    }

    nav .nav-item:hover .nav-link {
        color: var(--dark-purple);
        text-shadow: 0px 0px 20px #fff176;
    }

    .navbar {
        padding-block: 0;
    }



    .livedraw-drawer {
        display: none;
        position: fixed;
        top: 218px;
        left: 50%;
        transform: translateX(-50%);
        width: 66.4vw;
        z-index: 2000;
        background: #4d3a00;
        padding: 20px;
        justify-content: space-around;
        gap: 1rem;
        text-transform: uppercase;
    }

    .livedraw-drawer a {
        text-decoration: none;
        color: white;
    }

    .livedraw-item {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .livedraw-item img {
        width: 50px;
        height: 50px;
        margin: auto;
    }

    .livedraw-container:hover .livedraw-drawer {
        display: flex;
    }

    .paito-drawer {
        display: none;
        position: fixed;
        top: 218px;
        left: 50%;
        width: 66.4vw;
        z-index: 2000;
        background: #4d3a00;
        padding: 20px;
        justify-content: space-around;
        gap: 1rem;
        text-transform: uppercase;
        transform: translateX(-50%)
    }

    .paito-drawer a {
        text-decoration: none;
        color: white;
    }

    .paito-item {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .paito-item img {
        width: 50px;
        height: 50px;
        margin: auto;
    }

    .paito-container:hover .paito-drawer {
        display: flex;
    }

    .content-container {
        min-height: 100vh;
    }

    .register-button {
        background: #1f1f1f;
        border: 4px ridge aqua;
        font-weight: 700;
        color: white;
        padding-inline: 20px;
        box-shadow: 2px 2px 6px inset white;
    }

    .register-button:hover {
        background: #1f1f1f !important;
        border: 4px ridge aqua !important;
        font-weight: 700;
        box-shadow: -2px -2px 6px inset white;
    }

    /* END HEADER  */

    body {
        min-height: 100vh;
        background: url("/storage/page/background.jpg");
        background-size: cover;
        background-attachment: fixed;
        color: #ffffff;
    }

    main {

        margin-top: 218px;
        min-height: calc(100vh - 242px);
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .running-text-container {
        background: var(--light-purple);
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-block: 4px;
        z-index: 1040;
        box-shadow: 1px 3px 8px black;
    }

    marquee {
        font-size: 1.5rem;
        font-family: 'stencil', arial;
    }

    .running-text-container span {
        padding-inline: 1.5rem;
        background: var(--light-purple);
    }

    .main-content-container {
        background: #0c001a95;
        min-height: 70vh;
    }

    .main-logo {
        max-width: 20rem;
    }

    .main-title {
        font-size: 3rem;
        text-shadow: 0px 0px 10px aqua;
    }

    .banner-container>div img {
        box-shadow: 0px 4px 2px black;
    }

    .neon-text {
        color: white;
        text-shadow: 4px 4px 10px #fff176, -4px -4px 10px #fff176;
    }

    .neon-border {
        border: 3px solid #e4e4e4;
        padding: 8px;
        box-shadow: inset 4px 4px 8px #fff176, inset -4px -4px 8px #cfa800;
    }

    .neon-border:hover {
        cursor: pointer;
        border: 3px solid #ffffff;

    }

    .animated-neon-border:before,
    .animated-neon-border:after {
        content: '';
        position: absolute;
        left: -2px;
        top: -2px;
        background: linear-gradient(45deg, #ffea00, #a67c00, black);
        background-size: 400%;
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        z-index: -1;
        animation: steam 5s linear infinite;
    }

    .animated-neon-border-2:before,
    .animated-neon-border-2:after {
        content: '';
        position: absolute;
        left: 0px;
        top: 0px;
        background: linear-gradient(90deg, #ffea00, #d4af37, #000000);
        background-size: 400%;
        width: 100%;
        height: 100%;
        z-index: -1;
        animation: steam 5s linear infinite;
    }

    @keyframes steam {
        0% {
            background-position: 0 0;
        }

        50% {
            background-position: 230% 0;
        }

        100% {
            background-position: 0 0;
        }
    }

    .animated-neon-border:after {
        filter: blur(12px);
    }

    .animated-neon-border-2:after {
        filter: blur(15px);
    }

    .navbar {
        font-weight: 600;
    }

    .bg-gradient {
        /* background: linear-gradient(to bottom, rebeccapurple, DarkMagenta, Fuchsia) !important;
         */
        background: linear-gradient(to bottom, #fff47a 0%, #ffea00 55%, #cfa800 100%) !important;
    }

    .border_semi_round {
        border-radius: 10px;
    }

    .bg_transparent {
        background: rgba(187, 0, 187, 0.43);
    }

    .separator {
        height: 12px;
        background-image: -moz-linear-gradient(90deg, #fff47a 0%, #ffea00 55%, #cfa800 100%);
        background-image: -webkit-linear-gradient(90deg, #fff47a 0%, #ffea00 55%, #cfa800 100%);
        background-image: -ms-linear-gradient(90deg, #fff47a 0%, #ffea00 55%, #cfa800 100%);
    }

    article a,
    h1,
    h2,
    h3 {
        color: fuchsia;
    }

    article strong {
        color: gold;
    }


    .market-title {
        font-size: 1vw;
        margin-top: 2rem;
        height: 30%;
    }

    .market-date {
        font-size: clamp(0.8rem, 1.1vw, 1.2rem);
        margin-top: .5rem;
    }

    .market-button {
        font-size: 1.75vw;
        margin-top: 1rem;
        line-height: 2rem;
    }

    .tools-fixed {
        position: fixed;
        bottom: 2rem;
        right: 4vw;
        display: flex;
        flex-direction: column;
        z-index: 99999;
    }

    .tools-fixed:hover {
        cursor: pointer;
    }

    @media screen and (max-width: 992px) {
        .market-title {
            font-size: 1.125rem;
        }

        .market-date {
            margin-top: 0;
            font-size: 4vw;
            line-height: 2.5rem;
        }

        .market-button {
            font-size: 5vw;
        }

        header {

            background: #00000099;
            box-shadow: none;
        }

        .navbar-mobile {
            width: 100%;
            display: grid;
            grid-template-columns: auto auto;
            gap: 5px;
        }

        .navbar-mobile .button-gradient {
            padding-block: .4rem;
        }

        body {
            background: url("/storage/page/mobile-background.webp");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        main {
            margin-top: 131px;
            min-height: calc(100vh - 131px);
        }



        .main-content-container {
            background: none;
        }

        .running-text-container {
            z-index: 1020;
        }

        .cta-container {
            padding-inline: 0;
            grid-template-columns: auto auto;
        }

        .button-gradient {
            padding-block: .5vw;
            font-size: 1.25rem;
            color: yellow;
            font-weight: 900;
            display: flex;
            justify-content: center;
            align-items: center;
            text-shadow: 1px 1px 1px black;
        }

        .button-profile {
            font-size: 5vw
        }


        .navbar-nav {
            gap: 0;
        }

        .main-title {
            font-size: 2rem;
            background: #00000080;
            display: none;
        }

        .border_semi_round {
            border-radius: 0;
        }

        .bg-transparent {
            font-size: 1rem;
        }

        .navbar-toggler {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        h1,
        h2 {
            text-align: center;
        }
    }
</style>
