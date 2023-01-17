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

        $commande = Commande::where('Id_commande' , $id)->first();
        if($commande ){
            $commande->increment('Quantité');
        }
        else{
            $insert = Commande::insert([
                'Id_commande' => $produits->Id_Produits,
                'Description' => $produits->Description,
                'URL' => $produits->URL, 
                'Quantité' => 1,         
                'Prix' => $produits->Prix
            ]);
        }
    }
}
