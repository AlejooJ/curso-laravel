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
// Apartir de laravel 9 se pueden agrupar las rutas que tengan el mismo controlador
Route::controller(CursoController::class)->group(function () {
    // Primera ruta 
    // Se coloca en un array para hacer uso del metodo index 
    Route::get('cursos', [CursoController::class, 'index']);
    Route::get('cursos/create', [CursoController::class, 'create']);
    // enviar datos por la url
    Route::get('cursos/{curso}', [CursoController::class, 'show']);
});