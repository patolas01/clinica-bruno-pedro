<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\PostSaudeController;

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

/* formulario */
Route::get('/_admin/formulario', [PageController::class, 'formularioIndex'])->name('_admin.formulario.index');
Route::get('/_admin/formulario/create', [FormularioController::class, 'create'])->name('_admin.formulario.create');
Route::get('/_admin/formulario/show', [FormularioController::class, 'show'])->name('_admin.formulario.show');
Route::get('/_admin/formulario/edit', [FormularioController::class, 'edit'])->name('_admin.formulario.edit');
Route::post('/_admin/formulario', [FormularioController::class, 'store'])->name('_admin.formulario.store');
Route::post('/_admin/formulario', [FormularioController::class, 'update'])->name('_admin.formulario.update');

/* post-saude */
Route::get('/_admin/post-saude', [PageController::class, 'postSaudeIndex'])->name('_admin.post-saude.index');
Route::get('/_admin/post-saude/create', [PostSaudeController::class, 'create'])->name('_admin.post-saude.create');
Route::get('/_admin/post-saude/show', [PostSaudeController::class, 'show'])->name('_admin.post-saude.show');
Route::get('/_admin/post-saude/edit', [PostSaudeController::class, 'edit'])->name('_admin.post-saude.edit');
Route::post('/_admin/post-saude', [PostSaudeController::class, 'store'])->name('_admin.post-saude.store');
Route::post('/_admin/post-saude', [PostSaudeController::class, 'update'])->name('_admin.post-saude.update');


Route::group(['middleware' => ['auth', 'verified', 'admin'], 'as' => 'admin.', 'prefix' => 'admin'], function () {

    Route::resource('especialidades', EspecialidadeController::class);
    Route::resource('formularios', FormularioController::class);
    Route::resource('posts-saude', PostSaudeController::class);

});
