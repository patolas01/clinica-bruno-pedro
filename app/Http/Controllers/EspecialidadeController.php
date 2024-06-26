<?php

namespace App\Http\Controllers;

use App\Models\Especialidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\EspecialidadeRequest;

class EspecialidadeController extends Controller
{


    public function index()
    {
        $especialidades = Especialidade::all();
        return view('_admin.especialidade.index', compact('especialidades'));
    }



    public function create()
    {
        $especialidade = new Especialidade;
        return view('_admin.especialidade.create', compact("especialidade"));
    }



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
        return redirect()->route('admin.especialidades.index')
            ->with('success', 'Especialidade criada com sucesso');
    }


    public function show(Especialidade $especialidade)
    {
        return view('_admin.especialidade.show', compact("especialidade"));
    }


    public function edit(Especialidade $especialidade)
    {
        return view('_admin.especialidade.edit', compact('especialidade'));
    }



     public function update(EspecialidadeRequest $request, Especialidade $especialidade)
     {
         $fields = $request->validated();
         $especialidade->fill($fields);


         if ($request->hasFile('icon')) {

             if (!empty($especialidade->icon)) {
                 Storage::disk('public')->delete('especialidade_imagens/' . $especialidade->icon);
             }


             $imagem_path = $request->file('icon')->store('public/especialidade_imagens');
             $especialidade->icon = basename($imagem_path);
         }

         $especialidade->save();

         return redirect()->route('admin.especialidades.index')->with('success', 'Especialidade atualizada com sucesso');
     }



    public function destroy(Especialidade $especialidade)
    {
        Storage::disk('public')->delete('especialidade_imagens/' . $especialidade->icon);
        $especialidade->delete();
        return redirect()->route('admin.especialidades.index')->with(
            'success',
            'Especialidade eliminada com sucesso'
        );
    }
}

