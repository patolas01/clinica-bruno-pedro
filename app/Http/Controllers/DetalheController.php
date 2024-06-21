<?php

namespace App\Http\Controllers;

use App\Models\Detalhe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\DetalheRequest;
use App\Models\Especialidade;

class DetalheController extends Controller
{


    public function index()
{
    $detalhes = Detalhe::all();
    return view('_admin.detalhe.index', compact('detalhes'));
}



     public function create()
{
    $especialidades = Especialidade::all();
    $detalhe = new Detalhe;
    return view('_admin.detalhe.create', compact('detalhe', 'especialidades'));
}


    public function store(DetalheRequest $request)
    {
        $fields = $request->validated();

        $fields['especialidade_id'] = $request->input('especialidade_id');
        $detalhe = new detalhe();
        $detalhe->fill($fields);
        if ($request->hasFile('imagem')) {
            $imagem_path =
                $request->file('imagem')->store('public/detalheesp_imagens');
            $detalhe->imagem = basename($imagem_path);
        }

        $detalhe->save();
        return redirect()->route('admin.detalhes.index')
            ->with('success', 'detalhes criado com sucesso');
    }



    public function show(Detalhe $detalhe)
    {
        return view('_admin.detalhe.show', compact("detalhe"));
    }


    public function edit(Detalhe $detalhe)

    {
        $especialidades = Especialidade::all();
        return view('_admin.detalhe.edit', compact('detalhe','especialidades'));
    }



    public function update(DetalheRequest $request, Detalhe $detalhe)
    {
        $fields = $request->validated();
        $detalhe->fill($fields);
        if ($request->hasFile('imagem')) {
            if (!empty($detalhe->imagem)) {
                Storage::disk('public')->delete('detalheesp_imagens/' .
                    $detalhe->imagem);
            }
            $imagem_path =
                $request->file('imagem')->store('public/detalheesp_imagens');
            $detalhe->imagem = basename($imagem_path);
        }

        $detalhe->save();
        return redirect()->route('admin.detalhes.index')->with('success', 'detalhe atualizado com sucesso');
    }



     public function destroy(Detalhe $detalhe)
     {
        Storage::disk('public')->delete('detalheesp_imagens/' . $detalhe->imagem);
        $detalhe->delete();
        return redirect()->route('admin.detalhes.index')->with(
            'success',
            'Detalhes eliminados com sucesso'
        );
    }
}
