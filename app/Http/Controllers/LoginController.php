<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Client;

class LoginController extends Controller
{
    public function create(){
        return view('Login');
    }

    public function store(Request $request){

        $nom = $request->input("Nom");
        $prenom = $request->input("Prenom");
        $email = $request->input("Email");
        $password = bcrypt($request->input("Password"));

        $insertTable = Client::insert([
            'Nom' => $nom,
            'Prenom' => $prenom,
            'Email' => $email,
            'Password' => $password
        ]);

        if ($insertTable){
            echo "<h1>Insert OUI</h1>";
        }
        else{
            echo "<h1>Insert NOM</h1>";
        }

    }
}
