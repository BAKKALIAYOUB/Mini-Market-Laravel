<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;
use App\Models\Sweatshirts;
use App\Models\Pantalons;
use App\Models\Sacs;
use App\Models\Chaussures;

class AjouterController extends Controller
{
    public function create (){
        $produits = Produits ::all();
        return view('produitsAdmin', compact('produits'));
    }

    public function store (Request $request){

        $description = $request->input("Description");
        $url = $request->input("URL");
        $prix = $request->input("Prix");

        if($request->option == "Produits"){
            $insertion = Produits::insert([
                'Description' => $description,
                'URL' => $url,
                'Prix' => $prix
            ]);

            if($insertion){
                return redirect()->back();
            }
        }

        else if($request->option == "Sweatshirts"){
            $insertion = Sweatshirts::insert([
                'Description' => $description,
                'URL' => $url,
                'Prix' => $prix
            ]);

            if($insertion){
                return redirect()->back();
            }
        }
        else if ($request->option == "Sacs"){
            $insertion = Sacs::insert([
                'Description' => $description,
                'URL' => $url,
                'Prix' => $prix
            ]);
            if($insertion){
                return redirect()->back()->withErrors(["success" => "Le produits a été bien ajouter "]);
            }
        }
        else if($request->option == "Pantalons"){
            $insertion = Pantalons::insert([
                'Description' => $description,
                'URL' => $url,
                'Prix' => $prix
            ]);
            if($insertion){
                return redirect()->back();
            }
        }
        else if($request->option == "Chaussures"){
            $insertion = Chaussures::insert([
                'Description' => $description,
                'URL' => $url,
                'Prix' => $prix
            ]);
            if($insertion){
                return redirect()->back();
            }
        }
        

    }

}
