<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\PostSaudeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AvaliacoesController;
use App\Http\Controllers\DetalheController;

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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/index1', [PageController::class, 'index1'])->name('index1');
Route::get('/area-clinica', [PageController::class, 'areaClinica'])->name('areaClinica');
Route::get('/contactos', [PageController::class, 'contactos'])->name('contactos');
Route::get('/galeria', [PageController::class, 'galeria'])->name('galeria');
Route::get('/guia-saude', [PageController::class, 'guiaSaude'])->name('guiaSaude');
Route::get('/sobre', [PageController::class, 'sobre'])->name('sobre');
Route::get('/equipa', [PageController::class, 'equipa'])->name('equipa');
Route::get('/termos-e-condicoes', [PageController::class, 'termosCondicoes'])->name('termosCondicoes');
Route::get('/politicaprivacidade', [PageController::class, 'politicaprivacidade'])->name('politicaprivacidade');
Route::get('/especialidade-detalhe/{especialidade}', [PageController::class, 'especialidadeDetalhe'])->name('especialidadeDetalhe');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');



    Route::resource('especialidades', EspecialidadeController::class);
    Route::resource('formularios', FormularioController::class);
    Route::resource('posts-saude', PostSaudeController::class);
    Route::resource('avaliacoes', AvaliacoesController::class);
    Route::resource('detalhes', DetalheController::class);
