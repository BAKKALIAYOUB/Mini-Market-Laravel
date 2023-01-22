<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <title>
    Administrateur
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

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <h4 class="text-white text-capitalize ps-3" id="Nomtable" style="padding:20px 0 0 20px;">Administrateur</h4>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main" style="height:500px">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/dashboard.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <ul class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Catégories</h6>
            <li class="nav-item">
            <a class="nav-link text-white " onclick="displayTables(this)" name="Pantalons">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1" >Pantalons</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white " onclick="displayTables(this)" name="Chaussures">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1" >Chaussures</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white " onclick="displayTables(this)" name="Sacs">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Sacs</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white " onclick="displayTables(this)" name="Sweatshirts">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Sweatshirts</span>
            </a>
            </li>
        </ul>

        
        
        
      </ul>
    </div>
    
  </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3" id="Nomtable">Les <span id="h1-Table-name">Produits</span> les plus vendues <span class="badge badge-sm bg-gradient-success" style="float:right; margin-right :20px;">Ajouter</span></h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0" id="data-table">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"># Produit</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prix</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($table as $data)
                                        <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $data->Id_Produits }}</h6>
                                            </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><img src="{{ $data->URL }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                <span contenteditable="true" onclick="modificationProduits(this)" id="{{ $data->Id_Produits }}" name="Description"> {{ $data->Description }} </span>
                                            </p>
                                        </td>
                                        <td>
                                                <p class="text-xs font-weight-bold mb-0"> <span contenteditable="true" onclick="modificationProduits(this)" id="{{ $data->Id_Produits }}" name="Prix">{{ $data->Prix }}</span> DH</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success" id="{{ $data->Id_Produits }}" onclick="supprimerProduits(this)">Supprimer</span>
                                        </td>
                                        </tr>
                                        @endforeach
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
            function supprimerProduits(elt){
                $id = $(elt).attr("id");

                console.log($id);

                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr("content")
                    }
                });

                $table_Name = $('#h1-Table-name').html();


                $.ajax({
                    type: "POST",
                    url: "supprimerProduits/" + $table_Name,
                    data: {id_produit: $id},
                    success: function(){
                        $(elt).parent().parent().remove();
                    }
                });
            }

            function modificationProduits(elt){
                $AncienVal = $(elt).html();
                $idProduits = $(elt).attr("id");
                

                $(elt).blur(function(){
                    $newVal = $(elt).html();
                    $NomColumn = $(elt).attr('name');

                    console.log($newVal);
                    console.log($NomColumn);

                    $table_name = $('#h1-Table-name').html();

                    $.ajaxSetup({
                        headers:{
                            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr("content")
                        }
                    });
                    console.log($table_name);
                    $.ajax({
                        type: "POST",
                        url: "Modification/"+$table_name,
                        data: {id: $idProduits , newVal: $newVal , NomColumn: $NomColumn}
                    });

                }); 
            }

            function displayTables(elt){
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr("content")
                    }
                });
                $tableName = $(elt).attr("name");
                console.log($tableName);
                $.ajax({
                    type: "POST",
                    url:  $tableName,
                    success: function(responce){
                        $("#data-table").html( $(responce).find('table')  );
                    }
                });
                $('#Nomtable').html($tableName);
            }
        </script>

</body>