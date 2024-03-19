<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostSaude;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostSaudeRequest;

class PostSaudeController extends Controller
{
    public function index()
    {
        $postsSaude = PostSaude::all();
        return view('_admin.post-saude.index', compact('postsSaude'));
    }

    public function create()
    {
        $postSaude = new PostSaude;
        return view('_admin.post-saude.create', compact('postSaude'));
    }

    public function store(PostSaudeRequest $request)
    {
        $fields = $request->validated();
        $postSaude = new PostSaude();
        $postSaude->fill($fields);
        // Adicione aqui o código para lidar com o upload do arquivo, se necessário

        $postSaude->save();
        return redirect()->route('admin.post-saude.index')
            ->with('success', 'Post de saúde criado com sucesso');
    }

    public function show(PostSaude $postSaude)
    {
        return view('_admin.post-saude.show', compact('postSaude'));
    }

    public function edit(PostSaude $postSaude)
    {
        return view('_admin.post-saude.edit', compact('postSaude'));
    }

    public function update(PostSaudeRequest $request, PostSaude $postSaude)
    {
        $fields = $request->validated();
        $postSaude->fill($fields);
        // Adicione aqui o código para lidar com o upload do arquivo, se necessário

        $postSaude->save();
        return redirect()->route('admin.post-saude.index')
            ->with('success', 'Post de saúde atualizado com sucesso');
    }

    public function destroy(PostSaude $postSaude)
    {
        // Adicione aqui o código para excluir o arquivo, se necessário

        $postSaude->delete();
        return redirect()->route('admin.post-saude.index')
            ->with('success', 'Post de saúde eliminado com sucesso');
    }
}
