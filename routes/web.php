<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AvaliacoesController;

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
Route::get('/especialidade', [PageController::class, 'especialidade'])->name('especialidade');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/_admin/especialidade', [PageController::class, 'especialidadeIndex'])->name('_admin.especialidade');
Route::get('/_admin/avaliacoes', [AvaliacoesController::class, 'index'])->name('admin.avaliacoes.index');
Route::get('/_admin/avaliacoes/create', [AvaliacoesController::class, 'create'])->name('admin.avaliacoes.create');
Route::get('/_admin/avaliacoes/{avaliacoes}', [AvaliacoesController::class, 'show'])->name('admin.avaliacoes.show');
Route::get('/_admin/avaliacoes/{avaliacoes}/edit', [AvaliacoesController::class, 'edit'])->name('admin.avaliacoes.edit');
Route::delete('/_admin/avaliacoes/{avaliacoes}', [AvaliacoesController::class, 'destroy'])->name('admin.avaliacoes.destroy');



Route::post('/_admin/avaliacoes', [AvaliacoesController::class, 'store'])->name('admin.avaliacoes.store');

Route::put('/_admin/avaliacoes/{avaliacoes}', [AvaliacoesController::class, 'update'])->name('admin.avaliacoes.update');
Route::put('/_admin/avaliacoes/{avaliacoes}', [AvaliacoesController::class, 'update'])->name('admin.avaliacoes.update');

