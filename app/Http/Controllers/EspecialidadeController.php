<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\EspecialidadeRequest;

class EspecialidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $especialidades = Especialidade::all();
        return view('_admin.especialidade.index', compact('especialidades'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $especialidade = new Especialidade;
        return view('_admin.especialidade.create', compact("especialidade"));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(EspecialidadeRequest $request)
    {
        $fields = $request->validated();



        $especialidade = new especialidade();
        $especialidade->fill($fields);
        if ($request->hasFile('icon')) {
            $imagem_path =
                $request->file('icon')->store('public/especialidade_imagens');
            $especialidade->icon = basename($imagem_path);
        }
        $especialidade->save();
        return redirect()->route('especialidades.index')
            ->with('success', 'Especialidade criada com sucesso');
    }

    /**
     * Display the specified resource.
     */

    public function show(Especialidade $especialidade)
    {
        return view('_admin.especialidade.show', compact("especialidade"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Especialidade $especialidade)
    {
        return view('_admin.especialidade.edit', compact('especialidade'));
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(EspecialidadeRequest $request, Especialidade $especialidade)
     {
         $fields = $request->validated();
         $especialidade->fill($fields);

         // Verificar se uma nova imagem foi enviada
         if ($request->hasFile('icon')) {
             // Excluir a imagem existente, se houver
             if (!empty($especialidade->icon)) {
                 Storage::disk('public')->delete('especialidade_imagens/' . $especialidade->icon);
             }

             // Salvar a nova imagem
             $imagem_path = $request->file('icon')->store('public/especialidade_imagens');
             $especialidade->icon = basename($imagem_path);
         }

         $especialidade->save();

         return redirect()->route('especialidades.index')->with('success', 'Especialidade atualizada com sucesso');
     }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Especialidade $especialidade)
    {
        Storage::disk('public')->delete('especialidade_imagens/' . $especialidade->icon);
        $especialidade->delete();
        return redirect()->route('especialidades.index')->with(
            'success',
            'Especialidade eliminada com sucesso'
        );
    }
}

