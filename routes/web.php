<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.contact');
});

Route::get('/productos', [ProductoController::class,'index'])->name('productos.index');
Route::get('/productos/{product}',[ProductoController::class,'show'])->name('productos.details');
Route::get('/productos/categoria/{categoria}',[ProductoController::class,'category'])->name('productos.category');

