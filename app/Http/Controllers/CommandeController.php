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

        return $NumbreCommande;
    }

    public function CommandeTable(){
        $table = Commande::all();

        return view('commande' , compact('table'));
    }

    public function updateCommande(Request $request){
        Commande::where('Id_commande' , $request->idCommande)->update(['Quantité' => $request->quantite]);
    }

    public function TotalCommande(){
        $table = Commande::all();
        $Total=0;
        foreach($table as $commande){
            $Total += intval( intval($commande->Prix) * intval($commande->Quantité)  ) ;
        }
        return $Total;
    }
}
