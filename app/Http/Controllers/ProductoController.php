<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function index(){
        $products = Producto::where('estpro','activo')->get();
        return view('products.index',compact('products'));
    }

    public function show(Producto $product){
        $product->load('categoria');
        return view('products.details',compact('product'));
    }
    
    public function category(Categoria $categoria){
        $products = $categoria->productos()->where('estpro','activo')->with('categoria')->get();

        return view('products.index',compact('products'));
    }
}
