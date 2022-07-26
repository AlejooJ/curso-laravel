<?php

use Illuminate\Support\Facades\Route;
// Hacemos uso del controlador 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);

// Primera ruta 
// Se coloca en un array para hacer uso del metodo index 
Route::get('cursos', [CursoController::class, 'index']);

Route::get('cursos/create', [CursoController::class, 'create']);

// enviar datos por la url
Route::get('cursos/{curso}', [CursoController::class, 'show']);

// Si se quieren enviar más de dos parametros por medio de la url se debe denotar la ultima variable con ? al final como se muestra acontinuacion 
// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {

//     if ($categoria) {
//         return "Hola bienvenido al curso $curso de la categoria $categoria";
//     } else {
//         "Bienvenido al curso: $curso";
//     }
// });