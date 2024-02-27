<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [PageController::class, 'index']);
Route::get('/area-clinica', [PageController::class, 'areaClinica']);
Route::get('/contactos', [PageController::class, 'contactos']);
Route::get('/galeria', [PageController::class, 'galeria']);
Route::get('/guia-saude', [PageController::class, 'guiaSaude']);
Route::get('/sobre', [PageController::class, 'sobre']);
Route::get('/termos-e-condicoes', [PageController::class, 'termosCondicoes']);
Route::fallback(function () {return view('partials.error');});
