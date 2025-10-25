<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= lang('Errors.pageNotFound') ?></title>
</head>
<style>
    * {
        margin: 0px auto;
        padding: 0px;
        text-align: center;
    }

    body {
        background-color: #D4D9ED;
    }

    .cont_principal {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .cont_error {
        position: absolute;
        width: 100%;
        height: 300px;
        top: 50%;
        margin-top: -150px;
    }

    .cont_error>h1 {
        font-family: 'Lato', sans-serif;
        font-weight: 400;
        font-size: 150px;
        color: #fff;
        position: relative;
        left: -100%;
        transition: all 0.5s;
    }


    .cont_error>p {
        font-family: 'Lato', sans-serif;
        font-weight: 300;
        font-size: 24px;
        letter-spacing: 5px;
        color: #9294AE;
        position: relative;
        left: 100%;
        transition: all 0.5s;
        transition-delay: 0.5s;
        -webkit-transition: all 0.5s;
        -webkit-transition-delay: 0.5s;
    }

    .cont_aura_1 {
        position: absolute;
        width: 300px;
        height: 120%;
        top: 25px;
        right: -340px;
        background-color: #8A65DF;
        box-shadow: 0px 0px 60px 20px rgba(137, 100, 222, 0.5);
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
    }

    .cont_aura_2 {
        position: absolute;
        width: 100%;
        height: 300px;
        right: -10%;
        bottom: -301px;
        background-color: #8B65E4;
        box-shadow: 0px 0px 60px 10px rgba(131, 95, 214, 0.5), 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
        z-index: 5;
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
    }

    .cont_error_active>.cont_error>h1 {
        left: 0%;
    }

    .cont_error_active>.cont_error>p {
        left: 0%;
    }

    .cont_error_active>.cont_aura_2 {
        animation-name: animation_error_2;
        animation-duration: 4s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        animation-direction: alternate;
        transform: rotate(-20deg);
    }

    .cont_error_active>.cont_aura_1 {
        transform: rotate(20deg);
        right: -170px;
        animation-name: animation_error_1;
        animation-duration: 4s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        animation-direction: alternate;
    }

    @-webkit-keyframes animation_error_1 {
        from {
            -webkit-transform: rotate(20deg);
            transform: rotate(20deg);
        }

        to {
            -webkit-transform: rotate(25deg);
            transform: rotate(25deg);
        }
    }

    @-o-keyframes animation_error_1 {
        from {
            -webkit-transform: rotate(20deg);
            transform: rotate(20deg);
        }

        to {
            -webkit-transform: rotate(25deg);
            transform: rotate(25deg);
        }

    }

    @-moz-keyframes animation_error_1 {
        from {
            -webkit-transform: rotate(20deg);
            transform: rotate(20deg);
        }

        to {
            -webkit-transform: rotate(25deg);
            transform: rotate(25deg);
        }

    }

    @keyframes animation_error_1 {
        from {
            -webkit-transform: rotate(20deg);
            transform: rotate(20deg);
        }

        to {
            -webkit-transform: rotate(25deg);
            transform: rotate(25deg);
        }
    }




    @-webkit-keyframes animation_error_2 {
        from {
            -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
        }

        to {
            -webkit-transform: rotate(-20deg);
            transform: rotate(-20deg);
        }
    }

    @-o-keyframes animation_error_2 {
        from {
            -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
        }

        to {
            -webkit-transform: rotate(-20deg);
            transform: rotate(-20deg);
        }
    }

    @-moz-keyframes animation_error_2 {
        from {
            -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
        }

        to {
            -webkit-transform: rotate(-20deg);
            transform: rotate(-20deg);
        }
    }

    @keyframes animation_error_2 {
        from {
            -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
        }

        to {
            -webkit-transform: rotate(-20deg);
            transform: rotate(-20deg);
        }
    }

    /* From Uiverse.io by Nawsome */
    /*bg*/
    /*txt*/
    /*success*/
    .buttons {
        display: flex;
        justify-content: space-around;
        top: 20px;
        left: 20px;
    }

    .buttons button {
        width: 150px;
        height: 50px;
        background-color: transparent;
        margin: 20px;
        color: #0d233d;
        position: relative;
        overflow: hidden;
        font-size: 14px;
        letter-spacing: 1px;
        font-weight: 500;
        text-transform: uppercase;
        transition: all 0.3s ease;
        cursor: pointer;
        border: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 3px;
    }

    .buttons button:before,
    .buttons button:after {
        content: "";
        position: absolute;
        width: 0;
        height: 2px;
        background-color: #8A65DF;
        transition: all 0.3s cubic-bezier(0.35, 0.1, 0.25, 1);
    }

    .buttons button:before {
        right: 0;
        top: 0;
        transition: all 0.5s cubic-bezier(0.35, 0.1, 0.25, 1);
    }

    .buttons button:after {
        left: 0;
        bottom: 0;
    }

    .buttons button span {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        margin: 0;
        padding: 0;
        z-index: 1;
    }

    .buttons button span:before,
    .buttons button span:after {
        content: "";
        position: absolute;
        width: 2px;
        height: 0;
        background-color: #8A65DF;
        transition: all 0.3s cubic-bezier(0.35, 0.1, 0.25, 1);
    }

    .buttons button span:before {
        right: 0;
        top: 0;
        transition: all 0.5s cubic-bezier(0.35, 0.1, 0.25, 1);
    }

    .buttons button span:after {
        left: 0;
        bottom: 0;
    }

    .buttons button p {
        padding: 0;
        margin: 0;
        transition: all 0.4s cubic-bezier(0.35, 0.1, 0.25, 1);
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .buttons button p:before,
    .buttons button p:after {
        position: absolute;
        width: 100%;
        transition: all 0.4s cubic-bezier(0.35, 0.1, 0.25, 1);
        z-index: 1;
        left: 0;
    }

    .buttons button p:before {
        content: attr(data-title);
        top: 50%;
        transform: translateY(-50%);
    }

    .buttons button p:after {
        content: attr(data-text);
        top: 150%;
        color: #0d233d;
    }

    .buttons button:hover:before,
    .buttons button:hover:after {
        width: 100%;
    }

    .buttons button:hover span {
        z-index: 1;
    }

    .buttons button:hover span:before,
    .buttons button:hover span:after {
        height: 100%;
    }

    .buttons button:hover p:before {
        top: -50%;
        transform: rotate(5deg);
    }

    .buttons button:hover p:after {
        top: 50%;
        transform: translateY(-50%);
    }

    .buttons button.start {
        background-color: #0d233d;
        box-shadow: 0px 5px 10px -10px rgba(0, 0, 0, 0.2);
        transition: all 0.2s ease;
    }

    .buttons button.start p:before {
        top: -50%;
        transform: rotate(5deg);
    }

    .buttons button.start p:after {
        color: white;
        transition: all 0s ease;
        content: attr(data-start);
        top: 50%;
        transform: translateY(-50%);
        animation: start 0.3s ease;
        animation-fill-mode: forwards;
    }

    @keyframes start {
        from {
            top: -50%;
        }
    }

    .buttons button.start:hover:before,
    .buttons button.start:hover:after {
        display: none;
    }

    .buttons button.start:hover span {
        display: none;
    }

    .buttons button:active {
        outline: none;
        border: none;
    }

    .buttons button:focus {
        outline: 0;
    }

    @media only screen and (max-width:768px) {
        .cont_error>h1 {
            font-size: 80px;
        }
        .cont_aura_1 {
            height: 200%;
        }
    }
    .cont_aura_2 {
        height: 360px;
        right: -30%;
    }
</style>

<body>
    <div class="cont_principal">
        <div class="cont_error">

            <h1>Oops</h1>
            <p>The Page you're looking for isn't here.</p>
            <div class="buttons">
                <button class="btn" id="redirectHomePage">
                    <span></span>
                    <p data-start="" data-text="Home" data-title="Back"></p>
                </button>
            </div>
        </div>
        <div class="cont_aura_1"></div>
        <div class="cont_aura_2"></div>
    </div>
    <script>
        window.onload = function () {
            document.querySelector('.cont_principal').className = "cont_principal cont_error_active";
        }
        document.querySelector('#redirectHomePage').addEventListener('click', function () {
            window.location.href = "<?= base_url(); ?>";
        });

    </script>
</body>

</html>