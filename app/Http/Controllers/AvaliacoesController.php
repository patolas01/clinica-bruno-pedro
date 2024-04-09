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
        $avaliaco = new Avaliacoes;
        return view('_admin.avaliacoes.create', compact("avaliaco"));
    }

    public function store(AvaliacoesRequest $request)
    {
        $fields = $request->validated();
        $avaliaco = new Avaliacoes();
        $avaliaco->fill($fields);
        $avaliaco->save();
        return redirect()->route('admin.avaliacoes.index')
            ->with('success', 'Avaliação criada com sucesso');
    }

    public function show(Avaliacoes $avaliaco)
    {
        return view('_admin.avaliacoes.show', compact("avaliaco"));
    }

    public function edit(Avaliacoes $avaliaco)
    {
        return view('_admin.avaliacoes.edit', compact('avaliaco'));
    }

     public function update(AvaliacoesRequest $request, Avaliacoes $avaliaco)
     {
        $fields = $request->validated();
        $avaliaco->fill($fields);
        $avaliaco->save();
        return redirect()->route('admin.avaliacoes.index')->with('success', 'Avaliação atualizada com sucesso');
     }

    public function destroy(Avaliacoes $avaliaco)
    {
        $avaliaco->delete();
        return redirect()->route('admin.avaliacoes.index')->with('success', 'Avaliação eliminada com sucesso.');
    }

}

