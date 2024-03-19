<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;
use App\Models\PostSaude;

class PageController extends Controller
{
    public function index()
    {
        return view('index'); // Update with the actual path to your Blade view.
    }

    public function index1()
    {
        return view('index1'); // Update with the actual path to your Blade view.
    }

    public function areaClinica()
    {
        return view('area-clinica');
    }

    public function contactos()
    {
        return view('contactos');
    }

    public function galeria()
    {
        return view('galeria');
    }

    public function guiaSaude()
    {
        return view('guia-saude');
    }

    public function sobre()
    {
        return view('sobre');
    }

    public function equipa()
    {
        return view('equipa');
    }

    public function termosCondicoes()
    {
        return view('termos-e-condicoes');
    }

    public function politicaprivacidade()
    {
        return view('politicaprivacidade');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function especialidadeIndex()
    {
        return view('_admin.especialidade.index');
    }

    public function formularioIndex()
    {
        $formularios = Formulario::all();
        return view('_admin.formulario.index', compact('formularios'));
    }

    public function postSaudeIndex()
    {
        $posts_saude = PostSaude::all();
        return view('_admin.post-saude.index', compact('posts_saude'));
    }

    public function Error()
    {
        return view('partials.error');
    }
}
