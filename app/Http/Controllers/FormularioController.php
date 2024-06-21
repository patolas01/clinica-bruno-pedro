<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\FormularioRequest;
use App\Models\Especialidade;

class FormularioController extends Controller
{
    public function index()
    {
        $formularios = Formulario::all();
        return view('_admin.formulario.index', compact('formularios'));
    }

    public function create()
    {
        $especialidades = Especialidade::all();
        $formulario = new Formulario;
        return view('_admin.formulario.create', compact('formulario', 'especialidades'));
    }

    public function contactosForm(FormularioRequest $request)
    {
        $fields = $request->validated();
        $formulario = new Formulario();
        $formulario->fill($fields);


        $formulario->save();


        return redirect()->route('contactos')
            ->with('success', 'Formulário enviado com sucesso');
    }

    public function store(FormularioRequest $request)
    {
        $fields = $request->validated();
        $formulario = new Formulario();
        $formulario->fill($fields);


        $formulario->save();
        return redirect()->route('admin.formularios.index')
            ->with('success', 'Formulário criado com sucesso');
    }

    public function show(Formulario $formulario)
    {
        return view('_admin.formulario.show', compact('formulario'));
    }

    public function edit(Formulario $formulario)
    {
        return view('_admin.formulario.edit', compact('formulario'));
    }

    public function update(FormularioRequest $request, Formulario $formulario)
    {
        $fields = $request->validated();
        $formulario->fill($fields);


        $formulario->save();
        return redirect()->route('admin.formularios.index')
            ->with('success', 'Formulário atualizado com sucesso');
    }

    public function destroy(Formulario $formulario)
    {


        $formulario->delete();
        return redirect()->route('admin.formularios.index')
            ->with('success', 'Formulário eliminado com sucesso');
    }
}
