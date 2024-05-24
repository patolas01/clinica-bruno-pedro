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
            $galerium = new Galeria();
            return view('_admin.galeria.create', compact('galerium'));
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

        $galerium = new Galeria();  // Corrigido aqui
        $galerium->fill($fields);

        if ($request->hasFile('imagem')) {
            $imagem_path = $request->file('imagem')->store('public/galeria_imagens');
            $galerium->imagem = basename($imagem_path);
        }

        $galerium->save();

        return redirect()->route('admin.galeria.index')
            ->with('success', 'Imagem da galeria criada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeria $galerium)
    {
        return view('_admin.galeria.show', compact('galerium'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeria $galerium)
    {
        return view('_admin.galeria.edit', compact('galerium'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GaleriaRequest $request, Galeria $galerium)
    {
        $fields = $request->validated();
        $galerium->fill($fields);

        if ($request->hasFile('imagem')) {
            if (!empty($galerium->imagem)) {
                Storage::disk('public')->delete('galeria_imagens/' . $galerium->imagem);
            }

            $imagem_path = $request->file('imagem')->store('public/galeria_imagens');
            $galerium->imagem = basename($imagem_path);
        }

        $galerium->save();

        return redirect()->route('admin.galeria.index')->with('success', 'Imagem da Galeria atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeria $galerium)
    {
        Storage::disk('public')->delete('galeria_imagens/' . $galerium->imagem);
        $galerium->delete();
        return redirect()->route('admin.galeria.index')->with('success', 'Imagem da galeria eliminada com sucesso');
    }
}
