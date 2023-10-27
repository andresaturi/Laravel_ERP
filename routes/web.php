<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\CarrinhoController;
use Illuminate\Support\Facades\Route;


Route::resource('/', indexController::class);
Route::resource('produtos', ProdutoController::class);
Route::get('produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');
Route::get('categoria/{id}', [ProdutoController::class, 'categoria'])->name('categoria.show');
Route::get('carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('carrinho');
Route::post('carrinho', [CarrinhoController::class, 'addCarrinho'])->name('addCarrinho');


