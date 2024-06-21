<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostSaude;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
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
        $posts_saude = new PostSaude;
        return view('_admin.post-saude.create', compact('posts_saude'));
    }

    public function store(PostSaudeRequest $request)
    {
        $fields = $request->validated();


        if ($request->hasFile('imagem')) {

            $imagem = $request->file('imagem');

            $caminhoImagem = $imagem->store('public/post_imagens');

            $fields['imagem'] = basename($caminhoImagem);
        }


        $posts_saude = new PostSaude($fields);

        $posts_saude->save();

        return redirect()->route('admin.posts-saude.index')->with('success', 'Publicação criada com sucesso');
    }

    public function show(PostSaude $posts_saude)
    {
        return view('_admin.post-saude.show', compact('posts_saude'));
    }

    public function edit(PostSaude $posts_saude)
    {
        return view('_admin.post-saude.edit', compact('posts_saude'));
    }

    public function update(PostSaudeRequest $request, PostSaude $posts_saude)
    {
        $fields = $request->validated();
        $posts_saude->fill($fields);

        $posts_saude->save();
        return redirect()->route('admin.posts-saude.index')
            ->with('success', 'Post de saúde atualizado com sucesso');
    }

    public function destroy(PostSaude $posts_saude)
    {

        $posts_saude->delete();
        return redirect()->route('admin.posts-saude.index')
            ->with('success', 'Post de saúde eliminado com sucesso');
    }
}
