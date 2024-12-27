<?php

use App\Http\Controllers\CategorieController;
use App\Models\Categorie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');

Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');

Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');

Route::get('/categories/{id}',[CategorieController::class, 'show'])->name('categories.show');

Route::get('/categories/edit/{id}', [CategorieController::class, 'edit'])->name('categories.edit');

Route::put('/categories/update/{id}', [CategorieController::class, 'update'])->name('categories.update');

Route::delete('/categories/{id}', [CategorieController::class, 'destroy'])->name('categories.destroy');