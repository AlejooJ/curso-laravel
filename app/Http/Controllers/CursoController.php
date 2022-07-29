<?php
// El namespace me indica la ubicación del archivo 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return view('cursos.index');
    }
    public function create()
    {
        return view('cursos.create');
    }
    public function show($curso)
    {
        // Nota: todos los parametros que enviamos deben tener el mismo nombre 

        // FORMA 1
        // Si quiero enviar parametros por la url lo hago de la siguiente manera, la variable que recibe se debe llamar igual que la de mi documento html
        // return view('cursos.show', ['cursito' => $curso]);

        // FORMA 2
        // compact('cursito'); 
        // viene siendo esto ['cursito' => $curso]

        return view('cursos.show', compact('curso'));
    }
}