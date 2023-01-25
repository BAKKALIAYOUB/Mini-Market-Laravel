<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Friends Market</title>
        <!-- Favicon-->
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('./css/styles.css') }}" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="{{ asset('./css/styleTable.css') }}">
    </head>
    <body>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #30485f;">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/produits">Friends Market</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/produits">Home</a></li>                        
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Section-->
        <h1 style="float:left;padding-left:10px;">Votre Panier :</h1>
        <div style="padding:10px;">
            <table>
                <thead>
                <tr>
                    <th>Description</th>
                    <th>Quantité</th>
                    <th>Prix (× 1)</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($table as $commande)
                    <tr>
                        
                        <td data-title='E-mail'>
                            <img src="{{ $commande->URL }}" alt="imageCommande">
                            {{ $commande->Description }}
                        </td>
                        <td >
                            <input  type="number" value="{{ $commande->Quantité }}" class="selectQuantité" id="{{ $commande->Id_commande }}" onchange="updateQuantité(this)">
                        </td>
                        <td>
                            {{ $commande->Prix }}
                            DH
                        </td>
                        <td class='select'>
                            <a class='button' id="{{ $commande->Id_commande }}" onclick="supprimerCommande(this)">
                                Supprimer
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <td colspan="2">Total</td>
                    <td class="TotalCommande">
                    </td>
                </tfoot>
            </table>
            <a class="btn btn-outline-dark" href="/payment" style="margin-top: 20px;">
                <i class="bi-cart-fill me-1"></i>
                Valider la commande
            </a>
            
        </div>


        <!-- Footer-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


    

        <script>
            $.get("/CommandeController/TotalCommande" , function(rep){
                $(".TotalCommande").html(rep + " DH");
            });
            function updateQuantité(elt){
                $newQuantité = $(elt).val();
                console.log($newQuantité);
                $idCommande = $(elt).attr('id');
                
                
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr("content")
                    }
                });
                //probleme de update et this : recuperation juste de la 1er commande
                $.ajax({
                    type: "GET",
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
    </html>