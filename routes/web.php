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
})->name('login');

Route::get("/loginAdmin" , function(){
    return view('loginAdmin');
});
Route::get("/produits/commande" , function(){
    return view('commande');
});

Route::get("/payment" , function(){
    return view("payment");
});

Route::get('/adminView' , function(){
    return view ('adminView');
})->name('adminView');


Route::get('/produits' , [ProduitsController::class , 'index'])->name('produits');
Route::get('/pantalons' , [pantalonController::class , 'index2'])->name('pantalons');
Route::get('/chaussures' , [chaussuresController::class , 'index3'])->name('chaussures');
Route::get('/sacs' , [sacsController::class , 'index4'])->name('sacs');
Route::get('/sweatshirts' , [sweatshirtsContoller::class , 'index5'])->name('sweatshirts');


//route login qui retourne la view register
Route::get('Register' , [RegisterController::class , 'create'])->name('Register');
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
Route::post('loginAdmin' , [AdminController::class , 'login']);

//route pour afficher le tableau de la commande au view d'administrateur
Route::get('/all' , [ProduitsAdminController::class , 'index']);

Route::get('loginAdmin/produits' , [ProduitsAdminController::class , 'index1']);


//suppression de la commande par l'administrateur  
Route::post('/{table_name}' , [ProduitsAdminController::class , 'supprimerProduits']);

//route pour modification produits
Route::post('/{table_name}' , [ProduitsAdminController::class , 'ModificationProduits']);

Route::post('/{table_name}' , [ProduitsAdminController::class , 'display']);

Route::post('addChaussures' , [CommandeController::class , 'ajouterChaussures']);
Route::post('addPantalons' , [CommandeController::class , 'ajouterPantalons']);
Route::post('addSacs' , [CommandeController::class , 'ajoutersacs']);
Route::post('addSweatshirts' , [CommandeController::class , 'ajoutersweatshirts']);