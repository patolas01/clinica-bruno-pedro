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
        $detalhesps = DetalheEsp::all();
        return view('detalhe-esp.index', compact('$detalhesps'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $detalhe_esp = new DetalheEsp;
        $especialidades = Especialidade::all();
        return view('_admin.detalhe-esp.create', compact("detalhe_esp","especialidades"));
    }

    public function store(DetalheEspRequest $request)
    {
        $fields = $request->validated();



        $detalhe_esp = new detalhe_esp();
        $detalhe_esp->fill($fields);
        if ($request->hasFile('imagem')) {
            $imagem_path =
                $request->file('imagem')->store('public/detalheesp_imagens');
            $detalhe_esp->icon = basename($imagem_path);
        }
        $detalhe_esp->save();
        return redirect()->route('detalhe-esp.index')
            ->with('success', 'Detalhe da especialidade criada com sucesso');
    }



    public function show(DetalheEsp $detalhe_esp)
    {
        return view('_admin.detalhe-esp.show', compact('detalhe_esp'));
    }


    public function edit(DetalheEsp $detalhe_esp)
    {
        return view('_admin.detalhe-esp.edit', compact('detalhe_esp'));
    }



    public function update(DetalheEspRequest $request, DetalheEsp $detalhe_esp)
    {
        $fields = $request->validated();
        $detalhe_esp->fill($fields);


        if ($request->hasFile('imagem')) {

            if (!empty($detalhe_esp->imagem)) {
                Storage::disk('public')->delete('detalheesp_imagens/' . $detalhe_esp->imagem);
            }


            $imagem_path = $request->file('icon')->store('public/detalheesp_imagens');
            $detalhe_esp->imagem = basename($imagem_path);
        }

        $detalhe_esp->save();

        return redirect()->route('detalhe-esp.index')->with('success', 'Detalhe da especialidade atualizada com sucesso');
    }

   /**
    * Remove the specified resource from storage.
    */


    public function destroy(DetalheEsp $detalhe_esp)
    {
        if ( $detalhe_esp->especialidades()->exists()) {
             return redirect()->route('detalhe-esp.index')->withErrors(
                 ['delete' => 'detalhe da especialidade que tentou eliminar tem projetos associados']
             );
         }
         $detalhe_esp->delete();
         return redirect()->route('detalhe-esp.index')->with(
             'success',
             'detalhe da especialidade eliminado com sucesso'
         );
     }
}
