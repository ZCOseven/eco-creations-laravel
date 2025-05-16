<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.about');
});

Route::get('/productos', [ProductoController::class,'index'])->name('productos.index');