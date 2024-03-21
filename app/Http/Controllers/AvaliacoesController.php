<?php

namespace App\Http\Controllers;

use App\Models\Avaliacoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AvaliacoesRequest;

class AvaliacoesController extends Controller
{

    public function index()
    {
        $avaliacoes = Avaliacoes::all();
        return view('_admin.avaliacoes.index', compact('avaliacoes'));
    }

    public function create()
    {
        $avaliacoes = new Avaliacoes;
        return view('_admin.avaliacoes.create', compact("avaliacoes"));
    }

    public function store(AvaliacoesRequest $request)
    {
        $fields = $request->validated();
        $avaliacoes = new Avaliacoes();
        $avaliacoes->fill($fields);
        $avaliacoes->save();
        return redirect()->route('avaliacoes.index')
            ->with('success', 'Avaliação criada com sucesso');
    }

    public function show(Avaliacoes $avaliacoes)
    {
        return view('_admin.avaliacoes.show', compact("avaliacoes"));
    }

    public function edit(Avaliacoes $avaliacoes)
    {
        return view('_admin.avaliacoes.edit', compact('avaliacoes'));
    }

     public function update(AvaliacoesRequest $request, Avaliacoes $avaliacoes)
     {
        $fields = $request->validated();
        $avaliacoes->fill($fields);
        $avaliacoes->save();
        return redirect()->route('admin.avaliacoes.index')->with('success', 'Avaliação atualizada com sucesso');
     }

    public function destroy(Avaliacoes $avaliacoes)
    {
        $avaliacoes->delete();
        return redirect()->route('avaliacoes.index')->with('success', 'Avaliação eliminada com sucesso.');
    }
}

