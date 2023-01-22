<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <title>
    Votre Panier
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('./css/Admin/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('./css/Admin/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('./css/Admin/material-dashboard.css?v=3.0.4') }}" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3" id="Nomtable">Votre Paniers </h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0" id="data-table">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quantité</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prix</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($table as $commande)
                                        <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><img src="{{ $commande->URL }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                <span > {{ $commande->Description }} </span>
                                            </p>
                                        </td>
                                        <td>
                                            <input  type="number" value="{{ $commande->Quantité }}" class="selectQuantité" id="{{ $commande->Id_commande }}" onchange="updateQuantité(this)">
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            {{ $commande->Prix }}
                                            DH
                                        </td>
                                        <td >
                                            <a class="badge badge-sm bg-gradient-success" id="{{ $commande->Id_commande }}" onclick="supprimerCommande(this)">
                                                Supprimer
                                            </a>
                                        </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2">Total</td>
                                            <td  id="TotalCommande" class="align-middle text-center text-sm"></td>
                                        </tr>
                                    </tbody>
                                </table>              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


        <script>
            $.get("/CommandeController/TotalCommande" , function(rep){
                $("#TotalCommande").html(rep + " DH");
            });
            function updateQuantité(elt){
                $newQuantité = $(".selectQuantité").val();
                $idCommande = $(elt).attr('id');
                
                
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr("content")
                    }
                });
                
                $.ajax({
                    type: "POST",
                    url: "updateQuantité",
                    data: { 
                        quantite: $newQuantité,
                        idCommande: $idCommande
                    }
                });
                
                $.get("/CommandeController/TotalCommande" , function(rep){
                    $(".TotalCommande").html(rep + " DH");
                });
            }
            function supprimerCommande(elt){
                $idCommande = $(elt).attr('id');
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr("content")
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "DeleteCommande",
                    data: { idCommande: $idCommande },
                    success: function(){
                        $(elt).parent().parent().remove();
                        $.get("/CommandeController/TotalCommande" , function(rep){
                            $(".TotalCommande").html(rep + " DH");
                        });
                    }
                });
            }
        </script>

</body>