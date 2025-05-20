<?php

use App\Http\Controllers\ProductoController;
use App\Livewire\Procesar as LivewireProcesar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/productos', [ProductoController::class,'index'])->name('productos.index');
Route::get('/productos/{product}',[ProductoController::class,'show'])->name('productos.details');
Route::get('/productos/categoria/{categoria}',[ProductoController::class,'category'])->name('productos.category');

Route::get('/procesar',function (){return view('procesar.index');})->name('procesar.index');

