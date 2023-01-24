<?php

namespace App\Http\Controllers;

use App\Models\sacs;
use App\Models\Commande;
use Illuminate\Http\Request;

class sacsController extends Controller
{
    public function index4(){

        $table_sacs = sacs::all();
        $NumbreCommande = Commande::count();

        return view('sac' , compact(['table_sacs','NumbreCommande']));
    }
}
