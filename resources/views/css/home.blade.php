<style>
    button {
        background: linear-gradient(45deg, purple, rebeccapurple, magenta, fuchsia);
        color: white !important;
        font-weight: 700 !important;
        transition: all .5s linear;
    }

    button:hover {
        background: linear-gradient(-45deg, purple, rebeccapurple, magenta, fuchsia);
        color: black !important;
    }

    .card-wrapper {
        width: 49%;
    }

    .card-image {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        opacity: .2;
        z-index: 1
    }

    @media screen and (max-width: 992px) {
        .card-wrapper {
            width: 100%;
        }
    }
</style>
