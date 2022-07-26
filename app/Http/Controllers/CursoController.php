<?php
// El namespace me indica la ubicación del archivo 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return 'Bienvenido a la pagina principal';
    }
    public function create()
    {
        return 'En esta página podrás crear un curso';
    }
    public function show($curso)
    {
        return 'Hola este es  el curso de ' . $curso;
    }
}
