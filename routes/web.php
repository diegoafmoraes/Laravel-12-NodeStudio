<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;

// Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');
Route::resource('produtos', ProdutoController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/categoria/{nome}', [SiteController::class, 'categoria'])->name('site.categoria');












/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.index');

Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');*/

