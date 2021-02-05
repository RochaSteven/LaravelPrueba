<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ConfiguracionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/personas',[PersonaController::class, 'index']);
Route::post('/personas/create',[PersonaController::class, 'store']);



Route::get('/personas/{id}',[PersonaController::class, 'show']);
Route::put('/personas/{id}',[PersonaController::class, 'update']);
Route::delete('/personas/{id}', [PersonaController::class, 'destroy']);