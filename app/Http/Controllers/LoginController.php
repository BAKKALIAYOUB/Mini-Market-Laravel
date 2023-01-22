<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Client;
use App\Models\Commande;


class LoginController extends Controller
{
    public function create(){
        return view('Register');
    }

    public function store(Request $request){

        //recuperer les input entrer par l'user dans le formulaire
        $nom = $request->input("Nom");
        $prenom = $request->input("Prenom");
        $email = $request->input("Email");
        $password = bcrypt($request->input("Password"));
        
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            //validation d'email: Unique dans la  table Client
            'Email' => 'required|email|unique:Client,Email',
            'Password' => 'required' 
        ]);
         
        //insertion  des données dans la table client
        $insertTable = Client::insert([
            'Nom' => $nom,
            'Prenom' => $prenom,
            'Email' => $email,           
            'Password' => $password
        ]);



        //Réussit d'insertion ==> redirect vers view produits 
        if ($insertTable ){
            return redirect()->route('produits');
        }
    }

}
