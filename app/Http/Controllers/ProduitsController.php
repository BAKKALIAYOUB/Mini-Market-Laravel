<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produits;
use App\Models\Commande;


class ProduitsController extends Controller
{
    public function index(){

        $table = Produits::all();

        return view('produits' , compact('table'));
    }
}
