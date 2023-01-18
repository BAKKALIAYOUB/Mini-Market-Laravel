<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Commande;

use App\Models\Produits;


class CommandeController extends Controller
{
    public function  ajouterCommande(Request $request){
        $id = $request->id;

        $produits = Produits::where('Id_Produits' , $id)->first();

        $insert = Commande::insert([
            'Id_commande' => $produits->Id_Produits,
            'Description' => $produits->Description,
            'URL' => $produits->URL, 
            'Quantité' => 1,         
            'Prix' => $produits->Prix
        ]);
        
    }

    public function NomberOfCommande(){
        $NumbreCommande = Commande::count();

        return view('produits' , compact('NumbreCommande'));
    }
}
