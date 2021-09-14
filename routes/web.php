<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('login');
});
Route::get('/cadastroProduto', function () {
    return view('cadastroProduto');
});
Route::get('/editar', function () {
    return view('editar');
});
Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::resource('/products', ProductController::class);
