<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::resource('/', indexController::class);
Route::resource('users', UserController::class);

Route::resource('produtos', ProdutoController::class);
Route::get('produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');
Route::get('categoria/{id}', [ProdutoController::class, 'categoria'])->name('categoria.show');

Route::get('carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('carrinho');
Route::post('carrinho', [CarrinhoController::class, 'addCarrinho'])->name('addCarrinho');
Route::post('/remover', [CarrinhoController::class, 'removeCarrinho'])->name('removeCarrinho');
Route::post('/atualizar', [CarrinhoController::class, 'atualizaCarrinho'])->name('atualizaCarrinho');
Route::get('/limpar', [CarrinhoController::class, 'limparCarrinho'])->name('limparCarrinho');

Route::view('/login', 'login.form')->name('login.form');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/register', [LoginController::class, 'create'])->name('login.create');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth');

