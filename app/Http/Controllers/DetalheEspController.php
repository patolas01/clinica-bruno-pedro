<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\DetalheEspRequest;
use App\Models\Especialidade;
use App\Models\DetalheEsp;

class DetalheEspController extends Controller
{
    public function index()
{
    $detalhesEsp = DetalheEsp::all();
    return view('_admin.detalhe-esp.index', compact('detalhesEsp'));
}

    /**
     * Show the form for creating a new resource.
     */

     public function create()
     {
         $detalhes_esp = new DetalheEsp;
         $especialidades = Especialidade::all();
         return view('_admin.detalhe-esp.create', compact("detalhes_esp", "especialidades"));
     }

    public function store(DetalheEspRequest $request)
    {
        $fields = $request->validated();



        $detalhes_esp = new DetalheEsp();
        $detalhes_esp->fill($fields);
        if ($request->hasFile('imagem')) {
            $imagem_path =
                $request->file('imagem')->store('public/detalheesp_imagens');
            $detalhes_esp->imagem = basename($imagem_path);
        }
        $detalhes_esp->save();
        return redirect()->route('detalhes-esp.index')
            ->with('success', 'Detalhe da especialidade criada com sucesso');
    }



    public function show(DetalheEsp $detalhes_esp)
    {
        return view('_admin.detalhe-esp.show', compact('detalhes_esp'));
    }


    public function edit(DetalheEsp $detalhes_esp)
    {
        return view('_admin.detalhe-esp.edit', compact('detalhes_esp'));
    }



    public function update(DetalheEspRequest $request, DetalheEsp $detalhes_esp)
    {
        $fields = $request->validated();
        $detalhes_esp->fill($fields);


        if ($request->hasFile('imagem')) {

            if (!empty($detalhes_esp->imagem)) {
                Storage::disk('public')->delete('detalheesp_imagens/' . $detalhes_esp->imagem);
            }


            $imagem_path = $request->file('imagem')->store('public/detalheesp_imagens');
            $detalhes_esp->imagem = basename($imagem_path);
        }

        $detalhes_esp->save();

        return redirect()->route('detalhes-esp.index')->with('success', 'Detalhe da especialidade atualizada com sucesso');
    }

   /**
    * Remove the specified resource from storage.
    */


    public function destroy(DetalheEsp $detalhes_esp)
{
    if ($detalhes_esp->especialidade) {
        return redirect()->route('detalhes-esp.index')->withErrors(
            ['delete' => 'O detalhe da especialidade que você está tentando excluir está associado a outras entidades.']
        );
    }

    $detalhes_esp->delete();

    return redirect()->route('detalhes-esp.index')->with(
        'success',
        'Detalhe da especialidade excluído com sucesso'
    );
}
}
