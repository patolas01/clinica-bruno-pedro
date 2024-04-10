<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\GaleriaRequest;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $galerias = Galeria::all();
        return view('_admin.galeria.index', compact('galerias'));
    }

    /**
     * Show the form for creating a new resource.
     */

     public function create()
     {
         if (Gate::allows('create', Galeria::class)) {

             $galeria = new Galeria();
             return view('_admin.galeria.create', compact('galeria'));
         } else {
             abort(403); 
         }
     }

    /**
     * Store a newly created resource in storage.
     */

    public function store(GaleriaRequest $request)
    {
        $fields = $request->validated();



        $galeria = new galeria();
        $galeria->fill($fields);
        if ($request->hasFile('imagem')) {
            $imagem_path =
                $request->file('imagem')->store('public/galeria_imagens');
            $galeria->imagem = basename($imagem_path);
        }
        $galeria->save();
        return redirect()->route('admin.galeria.index')
            ->with('success', 'Imagem da galeria criada com sucesso');
    }

    /**
     * Display the specified resource.
     */

    public function show(Galeria $galeria)
    {
        return view('_admin.galeria.show', compact("galeria"));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Galeria $galeria)
    {
        return view('_admin.galeria.edit', compact('galeria'));
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(GaleriaRequest $request, Galeria $galeria)
     {
         $fields = $request->validated();
         $galeria->fill($fields);


         if ($request->hasFile('imagem')) {

             if (!empty($galeria->imagem)) {
                 Storage::disk('public')->delete('galeria_imagens/' . $galeria->imagem);
             }


             $imagem_path = $request->file('imagem')->store('public/galeria_imagens');
             $galeria->imagem = basename($imagem_path);
         }

         $galeria->save();

         return redirect()->route('admin.galeria.index')->with('success', 'Imagem da Galeria atualizada com sucesso');
     }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Galeria $galeria)
    {
        Storage::disk('public')->delete('galeria_imagens/' . $galeria->imagem);
        $galeria->delete();
        return redirect()->route('admin.galeria.index')->with(
            'success',
            'Imagem da galeria eliminada com sucesso'
        );
    }
}

