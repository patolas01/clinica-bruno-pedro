<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;
use App\Models\PostSaude;
use App\Models\Avaliacoes;
use App\Models\Especialidade;
use App\Models\Detalhe;
use App\Models\Galeria;
use App\Models\User;

class PageController extends Controller
{
    public function index()
    {
        $especialidades = Especialidade::all();

        $detalhesByEspecialidade = [];

        foreach ($especialidades as $especialidade) {
            $detalhe = Detalhe::where('especialidade_id', $especialidade->id)->first();

            $detalhesByEspecialidade[$especialidade->id] = $detalhe;
        }

        $avaliacoes = Avaliacoes::all();
        return view('index', compact('avaliacoes', 'especialidades', 'detalhesByEspecialidade'));
    }

    public function areaClinica()
    {
        $especialidades = Especialidade::all();
        return view('area-clinica', compact('especialidades'));
    }

    public function especialidadeDetalhe(Especialidade $especialidade)
    {
        $detalhes = Detalhe::where('especialidade_id', $especialidade->id)->get();
        return view('especialidade-detalhe', compact('especialidade', 'detalhes'));
    }


    public function contactos()
    {
        return view('contactos');
    }

    public function galeria()
    {
        $galerias = Galeria::all();
        return view('galeria', compact('galerias'));
    }

    public function guiaSaude()
    {
        $posts = PostSaude::all();
        return view('guia-saude', compact('posts'));
    }

    public function sobre()
    {
        $especialidades = Especialidade::all();
        return view('sobre', compact('especialidades'));
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

    public function perfil()
    {

        $user = auth()->user();


        if ($user) {
            return view('perfil', compact('user'));
        }
    }

    public function dashboard()
    {

        if (!auth()->check()) {

            return redirect()->route('login');
        }


        if (!auth()->user()->isAdmin()) {

            abort(403, 'Acesso não autorizado.');
        }


        $formularioData = Formulario::select('especialidade_id', Formulario::raw('count(*) as total'))
            ->groupBy('especialidade_id')
            ->pluck('total', 'especialidade_id');

        $especialidades = Especialidade::whereIn('id', $formularioData->keys())->pluck('nome', 'id');

        $avaliacaoData = Avaliacoes::select('classificacao', Avaliacoes::raw('count(*) as total'))
            ->groupBy('classificacao')
            ->pluck('total', 'classificacao');


        return view('_admin.dashboard', compact('formularioData', 'especialidades', 'avaliacaoData'));
    }
    public function Error()
    {
        return view('partials.error');
    }
}
