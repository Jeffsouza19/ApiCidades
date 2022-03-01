<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\AuthController;

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

Route::get('/cidade/verifica', [CidadeController::class, 'verificar']);
Route::get('/cidade/idcidade', [CidadeController::class,'cidade']);
Route::post('/cidade', [CidadeController::class,'adicionar']);
Route::get('/cidades', [CidadeController::class, 'list']);
Route::put('/cidade/{id}', [CidadeController::class,'editar']);
Route::delete('/cidade/{id}', [CidadeController::class,'deletar']);

