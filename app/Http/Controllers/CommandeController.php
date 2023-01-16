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
        ]);

        if($insert){
            echo "<h1>OUI ZED9ET </h1>";
        }
        else{
            echo "<h1>NOM MAZED9ET </h1>";

        }
    }
}
