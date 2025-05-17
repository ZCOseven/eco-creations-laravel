<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Importamos la clase Auth para manejar la autentificación del usuario
// Por el momento no la usare, pero a futuro será util
use Illiminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

}
