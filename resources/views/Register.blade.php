<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('./css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="POST" action="loginValidation"> 
                                        @csrf
                                        <div class="form-group">
                                            <div style="color: red;">
                                                @if($errors->has('Nom'))
                                                    <p>Le champ "Nom" a une erreur</p>
                                                @endif
                                            </div>
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Nom" name="Nom">
                                        </div>
                                        <div class="form-group">
                                            <div style="color :red;">
                                                @if($errors->has('Prenom'))
                                                    <p>Le champ "Prenom" a une erreur</p>
                                                @endif
                                            </div>
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Prenom" name="Prenom">
                                        </div>
                                        <div class="form-group">
                                            <div style="color: red;">
                                                @if($errors->has('Email'))
                                                    <p>Le champ "Email" a une erreur</p>
                                                @endif
                                            </div>
                                            <input type="texte" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Email" name="Email">
                                        </div>
                                        <div class="form-group">
                                            <div style="color: red;">
                                                @if($errors->has('Password'))
                                                    <p>Le champ "PASSWORD" a une erreur</p>
                                                @endif
                                            </div>
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="Password">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Register">
                                    </form>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

<script>
    function ValidaionSubmit(){
        $email = $("#exampleInputEmail").val();
        $mdp = $("#exampleInputPassword").val();

        if($email == "" && $mdp == ""){
            alert("Veuillez entrer l'adresse mail et le mot de passe");
            return false;
        }
        if ($email == ""){
            alert("Veuillez entrer l'adresse mail");
            return false;
        }
        if ($mdp == ""){
            alert("Veuillez entrer le mot de passe");
            return false;
        }
    
    }
</script>
</html>