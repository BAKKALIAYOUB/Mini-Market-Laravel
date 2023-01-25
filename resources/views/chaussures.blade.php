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
        <link href="{{ asset('./css/styles.css') }}" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    </head>
    <body class="body6">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="">Friends Market</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/produits">Home</a></li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <ul style="list-style:none;">
                                    <li><a class="dropdown-item" href="sweatshirts"><img src="{{ asset('images/sweatshirts.png') }}">sweatshirts</a></li>
                                    <li><a class="dropdown-item" href="pantalons"><img src="{{ asset('images/pantalon.png') }}">Pantalons</a></li>
                                    <li><a class="dropdown-item" href="chaussures"><img src="{{ asset('images/chaussures.png') }}">Chaussures</a></li>
                                    <li><a class="dropdown-item" href="sacs"><img src="{{ asset('images/sac.png') }}">Sacs</a></li>
                                </ul>
                                                
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                    <a class="btn btn-outline-dark" href="/produits/commande">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </a>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark6 py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white3">
                    <h1 class="display-4 fw-bolder">Bring power to your steps</h1>
                    <h4>get yours now!</h4>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                   
                   @foreach ($table_chaussures as $data)
                    <div class="col mb-5">
                        <div class="card6 h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ $data->URL }}" alt="..." />
                            <!-- Product details-->
                                
                                <div style="text-align:center;">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $data->Description }}</h5>
                                    <!-- Product price-->
                                    <span class="text-muted">{{ $data->Prix }} DH</span>
                                </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div  class="text-center"><a class="btn btn-outline-dark mt-auto" onclick="addToCart(this)" id="{{ $data->Id_Produits }}">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
 
                    
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark6">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


        <!-- Core theme JS-->
        <script>
            $.get('/CommandeController/NomberOfCommande' , function(rep){
                $(".badge").html(rep);
            });

            function addToCart(elt){
                $id = parseInt($(elt).attr("id"));
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr("content")
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "addChaussures",
                    data: { 
                        id: $id,
                    }
                    ,
                    success: function(){
                        console.log("oui");
                    }
                });
                $.get('/CommandeController/NomberOfCommande' , function(rep){
                    $(".badge").html(rep);
                });
                console.log($id);
            }
        </script>
    </body>
</html>