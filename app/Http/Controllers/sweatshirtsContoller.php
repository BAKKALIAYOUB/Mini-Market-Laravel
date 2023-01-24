<?php

namespace App\Http\Controllers;

use App\Models\sweatshirts;
use App\Models\Commande;
use Illuminate\Http\Request;

class sweatshirtsContoller extends Controller
{
    public function index5(){
    $table_sweatshirts = sweatshirts::all();
    $NumbreCommande = Commande::count();

    return view('sweatshirts' , compact(['table_sweatshirts','NumbreCommande']));
}
}
