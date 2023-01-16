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

Route::post('loginValidation' , [LoginController::class , "store"]);

Route::get('/produits' , [ProduitsController::class , 'index']);


Route::get('/produits', [ProduitsController::class , 'index'])->name('produits');

Route::get('/test' , [CommandeController::class , 'ajouterCommande']);
