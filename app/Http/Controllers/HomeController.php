<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        // El metodo view nos lleva directamente a la carpeta view donde llamanos el archivo en el cual estara nuestro archivo html o vista, para el caso se llama 'home' y no es necesario colocar la extensión 
        return view('home');
    }
}