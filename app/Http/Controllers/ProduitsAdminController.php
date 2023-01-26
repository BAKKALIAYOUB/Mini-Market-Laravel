<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;
use App\Models\Sweatshirts;
use App\Models\Pantalons;
use App\Models\Sacs;
use App\Models\Chaussures;




class ProduitsAdminController extends Controller
{
    public function index(){

        $table = Produits::all();

        return view('produitsAdmin' , compact('table'));
    }

    public function index1(){
        return view('adminView');
    }


    public function supprimerProduits(Request $request , $table_name){
        
        if($table_name == "Sweatshirts"){
            Sweatshirts::where("Id_Produits" , $request->id_produit)->delete();

        }
        else if($table_name == "Sacs"){
            Sacs::where("Id_Produits" , $request->id_produit)->delete();

        }
        else if($table_name == "Pantalons"){
            
            Pantalons::where("Id_Produits" , $request->id_produit)->delete();

        }
        else if($table_name == "Chaussures"){
            Chaussures::where("Id_Produits" , $request->id_produit)->delete();

        }
        else if($table_name == "Produits"){
            Produits::where("Id_Produits" , $request->id_produit)->delete();

        }
    }

    public function ModificationProduits( Request $request,$table_name){
        if($table_name == "Sweatshirts"){
            Sweatshirts::where('Id_Produits' , $request->id)->update([$request->NomColumn => $request->newVal]);
        }
        else if($table_name == "Sacs"){
            Sacs::where('Id_Produits' , $request->id)->update([$request->NomColumn => $request->newVal]);
        }
        else if($table_name == "Pantalons"){
            Pantalons::where('Id_Produits' , $request->id)->update([$request->NomColumn => $request->newVal]);
        }
        else if($table_name == "Chaussures"){
            Chaussures::where('Id_Produits' , $request->id)->update([$request->NomColumn => $request->newVal]);
        }
        else if ($table_name == "Produits"){
            Produits::where('Id_Produits' , $request->id)->update([$request->NomColumn => $request->newVal]);
        }
    }

    public function display($table_name){
        if($table_name == "Sweatshirts"){
            $table = Sweatshirts::all();
            return view ("produitsAdmin" , compact('table'));
        }
        else if($table_name == "Sacs"){
            $table = Sacs::all();
            return view ("produitsAdmin" , compact('table'));
        }
        else if($table_name == "Pantalons"){
            $table = Pantalons::all();
            return view ("produitsAdmin" , compact('table'));
        }
        else if($table_name == "Chaussures"){
            $table = Chaussures::all();
            return view ("produitsAdmin" , compact('table'));
        }


    }

    public function displayFormulaire(){
        return view('ajouterProduits');
    }

}
