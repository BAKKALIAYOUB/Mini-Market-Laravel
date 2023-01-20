<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('acceuil');
});

Route::get('/register' , function(){
    return view('Register');
});

Route::get("/login" , function(){
    return view('Login');
});
Route::get("/produits/commande" , function(){
    return view('commande');
});

//route login qui retourne la view register
Route::get('login' , [LoginController::class , 'create'])->name('login');
Route::post('loginValidation' , [LoginController::class , "store"])->middleware("User_Auth");

//route produits qui redirect vers la view produits si l'athentification du l'utilisateur est reussi
Route::get('/produits' , [ProduitsController::class , 'index'])->name('produits')->middleware('auth');


Route::post('test' , [CommandeController::class , 'ajouterCommande']);

Route::get('/CommandeController/NomberOfCommande' , [ CommandeController::class , 'NomberOfCommande' ])->name('/CommandeController/NomberOfCommande');
Route::get('/produits/commande' ,  [CommandeController::class , 'CommandeTable'])->name('commande');

Route::post('produits/updateQuantité' , [CommandeController::class , 'updateCommande']);

Route::get('/CommandeController/TotalCommande' , [CommandeController::class , 'TotalCommande'])->name('/CommandeController/NomberOfCommande');

Route::post('produits/DeleteCommande' , [CommandeController::class , 'DeleteCommande']);
