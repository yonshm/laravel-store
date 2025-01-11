<?php

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
});
//  Ctaegories 
Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');

Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');

Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');

Route::get('/categories/{id}',[CategorieController::class, 'show'])->name('categories.show');

Route::get('/categories/edit/{id}', [CategorieController::class, 'edit'])->name('categories.edit');

Route::put('/categories/update/{id}', [CategorieController::class, 'update'])->name('categories.update');

Route::delete('/categories/{id}', [CategorieController::class, 'destroy'])->name('categories.destroy');




// Clients
Route::get('/clients',[ClientController::class,'index'])->name('clients.index');

Route::get('/clients/create',[ClientController::class,'create'])->name('clients.create');

Route::post('/clients', [ClientController::class,'store'])->name('clients.store');

Route::get('/clients/{id}', [ClientController::class,'show'])->name('clients.show');

Route::get('/clients/edit/{id}', [ClientController::class, 'edit'])->name('clients.edit');

Route::put('/clients/update/{id}', [ClientController::class, 'update'])->name('clients.update');

Route::delete('/clients/{id}', [ClientController::class , 'destroy'])->name('clients.destroy');


// produits
Route::get('/produits',[ProduitController::class, 'index'])->name('produits.index');

Route::get('/produits/create',[ProduitController::class, 'create'])->name('produits.create');

Route::post('/produits',[ProduitController::class, 'store'])->name('produits.store');

Route::get('/produits/{id}',[ProduitController::class , 'show'])->name('produits.show')->where('id','[0-9]');

Route::get('/produits/{id}',[ProduitController::class, 'show'])->name('produits.show');

Route::get('/produits/edit/{id}', [ProduitController::class, 'edit'])->name('produits.edit');

Route::get('/produits/categorie/{id}', [ProduitController::class, 'indexByCat'])->name('produits.indexByCat');

Route::put('/produits/update/{id}', [ProduitController::class, 'update'])->name('produits.update');

Route::delete('/produits/{id}',[ProduitController::class, 'destroy'])->name('produits.destroy');

## commandes

Route::get('/commandes',[CommandeController::class, 'index'])->name('commandes.index');

Route::get('/commandes/{id}',[CommandeController::class, 'show'])->name('commandes.show');

Route::delete('/commandes/{id}', [CommandeController::class, 'destroy'])->name('commandes.destroy');

Route::put('/commandes/{id}/status', [CommandeController::class, 'updateStatus'])->name('commandes.updateStatus');
