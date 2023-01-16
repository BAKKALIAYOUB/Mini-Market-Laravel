<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Friends Market</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('./css/style.css') }}" rel="stylesheet" />


        <style>
            .Boxs{
                margin: auto;
                width: 500px;
                display: flex;
                flex-direction: row;
                margin-top: 80px;
            }
            .boxClient{
                --bs-bg-opacity: 1;
                background-color: #4e73df;
                padding: 40px;
                margin: auto;
                border-radius: 10%;
                font-size: 1.2rem;
                font-weight: bolder !important;
            }
            a{
              color: white;
              text-decoration: none;
            }

            .boxAdministrateurs{
                --bs-bg-opacity: 1;
                background-color: #4e73df;
                padding: 40px;
                margin: auto;
                border-radius: 10%;
                font-size: 1.2rem;
                line-height: 1.2;
                font-weight: bolder ;
            }
            .boxClient:hover ,.boxAdministrateurs:hover {
                box-shadow: 0px 0px 20px #000;
            }

            span{
                color: rgba(249, 249, 4, 0.853);
            }
        </style>


    </head>
    <body>

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Welcome to <span class="auto-type">Friends Market</span></h1>
                </div>
            </div>
        </header>
        <!-- Client / administrateur -->
        <div class="Boxs">
            <div class="boxClient">
                <a href="register">Client</a>
            </div>
    
            <div class="boxAdministrateurs">
                <a href="login">Administrateurs</a>
            </div>
        </div>  


        <!-- Typed effect. Source: https://github.com/mattboldt/typed.js/ -->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

        <script>
            var typed = new Typed(".auto-type", {
                strings: ["Friends Shop" , "" , "Friends Shop" , ""],
                smartBackspace: true,
                loop: true,
                typeSpeed: 60,
                backSpeed: 100
            });

        </script>
    </body>
</html>