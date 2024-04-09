<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;
use App\Models\PostSaude;
use App\Models\Avaliacoes;
use App\Models\Especialidade;
use App\Models\Detalhe;
use App\Models\User;


class PageController extends Controller
{
    public function index()
    {
        // Retrieve all especialidades
        $especialidades = Especialidade::all();

        // Define an array to store the detalhes for each especialidade
        $detalhesByEspecialidade = [];

        // Loop through each especialidade and retrieve its associated detalhes
        foreach ($especialidades as $especialidade) {
            // Retrieve the associated detalhes for the current especialidade
            $detalhe = Detalhe::where('especialidade_id', $especialidade->id)->first();

            // Add the retrieved detalhe to the array
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
        // Verificar se o usuário está autenticado
        if (!auth()->check()) {
            // Se o usuário não está autenticado, redirecionar para a página de login
            return redirect()->route('login');
        }

        // Verificar se o usuário é um administrador
        if (!auth()->user()->isAdmin()) {
            // Se o usuário não é um administrador, abortar com erro 403 (Acesso não autorizado)
            abort(403, 'Acesso não autorizado.');
        }

        // Continuar com a lógica existente para buscar dados relacionados a Formulários e Avaliações
        $formularioData = Formulario::select('especialidade_id', Formulario::raw('count(*) as total'))
            ->groupBy('especialidade_id')
            ->pluck('total', 'especialidade_id');

        $especialidades = Especialidade::whereIn('id', $formularioData->keys())->pluck('nome', 'id');

        $avaliacaoData = Avaliacoes::select('classificacao', Avaliacoes::raw('count(*) as total'))
            ->groupBy('classificacao')
            ->pluck('total', 'classificacao');

        // Retornar a view do dashboard com os dados buscados e os dados de formulários e avaliações
        return view('_admin.dashboard', compact('formularioData', 'especialidades', 'avaliacaoData'));
    }
    public function Error()
    {
        return view('partials.error');
    }
}
