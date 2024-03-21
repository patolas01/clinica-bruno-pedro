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

        // Verifique se uma imagem foi enviada
        if ($request->hasFile('imagem')) {
            // Obtenha o arquivo da solicitação
            $imagem = $request->file('imagem');
            // Salve a imagem no armazenamento
            $caminhoImagem = $imagem->store('public/post_imagens');
            // Salve apenas o nome do arquivo no banco de dados
            $fields['imagem'] = basename($caminhoImagem);
        }

        // Crie uma nova instância do modelo PostSaude com os dados preenchidos
        $posts_saude = new PostSaude($fields);

        // Salve o post de saúde no banco de dados
        $posts_saude->save();

        // Redirecione de volta para a página de índice com uma mensagem de sucesso
        return redirect()->route('posts-saude.index')->with('success', 'Publicação criada com sucesso');
    }

    public function show(PostSaude $posts_saude)
    {
        /*dd($postSaude);*/
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
        // Adicione aqui o código para lidar com o upload do arquivo, se necessário

        $posts_saude->save();
        return redirect()->route('posts-saude.index')
            ->with('success', 'Post de saúde atualizado com sucesso');
    }

    public function destroy(PostSaude $posts_saude)
    {
        // Adicione aqui o código para excluir o arquivo, se necessário

        $posts_saude->delete();
        return redirect()->route('posts-saude.index')
            ->with('success', 'Post de saúde eliminado com sucesso');
    }
}
