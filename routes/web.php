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


Route::get('/test' , function(){
    return view('test');
});

Route::get('/', function () {
    return view('acceuil');
});

Route::get('/register' , function(){
    return view("Register");
});

Route::get('/Login' , function(){
    return view('Login');
});

Route::get("/loginAdmin" , function(){
    return view('loginAdmin');
});
Route::get("/produits/commande" , function(){
    return view('commande');
});
Route::get('produitsAdmin' , function(){
    return view('produitsAdmin');
})->name('produitsAdmin');

//route login qui retourne la view register
Route::get('login' , [RegisterController::class , 'create'])->name('login');
Route::post('loginValidation' , [RegisterController::class , "store"]);

//route pour login de client
Route::post('LoginClient' , [RegisterController::class , 'CheckClient']);

//route produits qui redirect vers la view produits si l'athentification du l'utilisateur est reussi
Route::get('/produits' , [ProduitsController::class , 'index'])->name('produits');


Route::post('test' , [CommandeController::class , 'ajouterCommande']);

Route::get('/CommandeController/NomberOfCommande' , [ CommandeController::class , 'NomberOfCommande' ])->name('/CommandeController/NomberOfCommande');
Route::get('/produits/commande' ,  [CommandeController::class , 'CommandeTable'])->name('commande');

//update de la quantité de la commande quand l'utilsateur change la quantité 
Route::post('produits/updateQuantité' , [CommandeController::class , 'updateCommande']);

//envoie de total du commande calculer par la fo,ction TotalCommande du controlleur CommandeController au view commande
Route::get('/CommandeController/TotalCommande' , [CommandeController::class , 'TotalCommande'])->name('/CommandeController/NomberOfCommande');

//supresion de la commande quand l'utilsateur clique sur le button supprimer
Route::post('produits/DeleteCommande' , [CommandeController::class , 'DeleteCommande']);

//route pour login d'administrateur
Route::post('loginAdminV' , [AdminController::class , 'login']);

//route pour afficher le tableau de la commande au view d'administrateur
Route::get('loginAdmin/produits' , [ProduitsAdminController::class , 'index'])->name('produitsAdmin');

//suppression de la commande par l'administrateur  
Route::post('loginAdmin/produits/supprimerProduits/{table_name}' , [ProduitsAdminController::class , 'supprimerProduits']);

//route pour modification produits
Route::post('loginAdmin/produits/Modification/{table_name}' , [ProduitsAdminController::class , 'ModificationProduits']);

Route::post('loginAdmin/produits/{table_name}' , [ProduitsAdminController::class , 'display']);

