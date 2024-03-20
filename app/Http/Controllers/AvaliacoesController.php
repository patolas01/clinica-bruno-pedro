<?php

namespace App\Http\Controllers;

use App\Models\Avaliacoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AvaliacoesRequest;

class AvaliacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $avaliacoes = Avaliacoes::all();
        return view('_admin.avaliacoes.index', compact('avaliacoes'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $avaliacoes = new Avaliacoes;
        return view('_admin.avaliacoes.create', compact("avaliacoes"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(AvaliacoesRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */

    public function show(Avaliacoes $avaliacoes)
    {
        return view('_admin.avaliacoes.show', compact("avaliacoes"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Avaliacoes $avaliacoes)
    {
        return view('_admin.avaliacoes.edit', compact('avaliacoes'));
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(AvaliacoesRequest $request, Avaliacoes $avaliacoes)
     {
        $fields = $request->validated();
        $avaliacoes->fill($fields);
        $avaliacoes->save();
        return redirect()->route('admin.avaliacoes.index')->with('success', 'Avaliação atualizada com sucesso');
     }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Avaliacoes $avaliacoes)
    {
        $avaliacoes->delete();
        return redirect()->route('avaliacoes.index')->with('success', 'Post eliminado com sucesso.');
    }
}

