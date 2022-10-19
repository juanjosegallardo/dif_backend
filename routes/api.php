<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\ReporteRutaController;
use App\Http\Controllers\RutaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|'jwt.verify'
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware([])->group(function (){
    //persona
    Route::resource("/personas", PersonaController::class);
    Route::get("xlss/personas", [ExcelController::class, 'exportarPersonas']); 

    //ruta
    Route::resource("/rutas", RutaController::class);

    //Reportes
    Route::get("pdfs/rutas/desayunos/calientes", [ReporteRutaController::class, 'reporteRutaLocalidad']);

});