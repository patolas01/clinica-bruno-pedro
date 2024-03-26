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
    $detalhesesps = DetalheEsp::all();
    return view('_admin.detalhe-esp.index', compact('detalhesesps'));
}

    /**
     * Show the form for creating a new resource.
     */

     public function create()
     {
         $detalheesp = new DetalheEsp;
         $especialidades = Especialidade::all();
         return view('_admin.detalhe-esp.create', compact("detalheesp", "especialidades"));
     }

    public function store(DetalheEspRequest $request)
    {
        $fields = $request->validated();



        $detalheesp = new DetalheEsp();
        $detalheesp->fill($fields);
        if ($request->hasFile('imagem')) {
            $imagem_path =
                $request->file('imagem')->store('public/detalheesp_imagens');
            $detalheesp->imagem = basename($imagem_path);
        }
        $detalheesp->save();
        return redirect()->route('detalheesp.index')
            ->with('success', 'Detalhe da especialidade criada com sucesso');
    }



    public function show(DetalheEsp $detalheesp)
    {
        return view('_admin.detalhe-esp.show', compact('detalheesp'));
    }


    public function edit(DetalheEsp $detalheesp)
    {
        return view('_admin.detalhe-esp.edit', compact('detalheesp'));
    }



    public function update(DetalheEspRequest $request, DetalheEsp $detalheesp)
    {
        $fields = $request->validated();
        $detalheesp->fill($fields);


        if ($request->hasFile('imagem')) {

            if (!empty($detalheesp->imagem)) {
                Storage::disk('public')->delete('detalheesp_imagens/' . $detalheesp->imagem);
            }


            $imagem_path = $request->file('imagem')->store('public/detalheesp_imagens');
            $detalheesp->imagem = basename($imagem_path);
        }

        $detalheesp->save();

        return redirect()->route('detalheesp.index')->with('success', 'Detalhe da especialidade atualizada com sucesso');
    }

   /**
    * Remove the specified resource from storage.
    */


    public function destroy(DetalheEsp $detalheesp)
{
    if ($detalheesp->especialidade) {
        return redirect()->route('detalheesp.index')->withErrors(
            ['delete' => 'O detalhe da especialidade que você está tentando excluir está associado a outras entidades.']
        );
    }

    $detalheesp->delete();

    return redirect()->route('detalheesp.index')->with(
        'success',
        'Detalhe da especialidade excluído com sucesso'
    );
}
}
