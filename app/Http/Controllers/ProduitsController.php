<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produits;
use App\Models\Commande;

use Illuminate\Support\Facades\Auth;



class ProduitsController extends Controller
{
    public function create(){
        return view("produits");
    }
    
    public function index(Request $rq){

        $table = Produits::all();

        return view('produits' , compact('table'));
    }
}
