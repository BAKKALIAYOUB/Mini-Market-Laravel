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
        
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'Email' => 'required|email',
            'Password' => 'required'
        ]);

        $insertTable = Client::insert([
            'Nom' => $nom,
            'Prenom' => $prenom,
            'Email' => $email,           
            'Password' => $password
        ]);

        if ($insertTable){
            return redirect()->route('produits');
        }


    }
}
