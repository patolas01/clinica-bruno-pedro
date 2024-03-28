<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;
use App\Models\PostSaude;
use App\Models\Avaliacoes;
use App\Models\Especialidade;


class PageController extends Controller
{
    public function index()
    {
        // $especialidade = Especialidade::all();
        $avaliacoes = Avaliacoes::all();
        return view('index', compact('avaliacoes'));
    }

    public function areaClinica()
    {
        $especialidades = Especialidade::all();
        return view('area-clinica', compact('especialidades'));
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
        // Fetch data from the database
        $data = Formulario::select('especialidade_id', Formulario::raw('count(*) as total'))
            ->groupBy('especialidade_id')
            ->pluck('total', 'especialidade_id');

        // Get the names of especialidades
        $especialidades = Especialidade::whereIn('id', $data->keys())->pluck('nome', 'id');


        return view('_admin.dashboard', compact('data', 'especialidades'));
    }

    public function Error()
    {
        return view('partials.error');
    }
}
