<?php

namespace App\Http\Controllers;

use App\Models\pantalons;
use App\Models\Commande;
use Illuminate\Http\Request;

class pantalonController extends Controller
{
    public function index2(){

    $table_pantalons = pantalons::all();
    $NumbreCommande = Commande::count();

    return view('pantalons' , compact(['table_pantalons','NumbreCommande']));
   }

}
