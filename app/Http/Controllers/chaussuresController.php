<?php

namespace App\Http\Controllers;

use App\Models\chaussures;
use App\Models\Commande;
use Illuminate\Http\Request;

class chaussuresController extends Controller
{
    public function index3(){

        $table_chaussures = chaussures::all();
        $NumbreCommande = Commande::count();
        
        return view('chaussures' , compact(['table_chaussures','NumbreCommande']));
    }
}
