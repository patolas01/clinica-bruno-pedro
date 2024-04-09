<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Busca todos os usuários
        $users = User::all();

        // Retorna a view com a lista de usuários
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Retorna a view para criar um novo usuário
        return view('users.create');
    }

    /**
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valida os dados do formulário
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'perm' => 'required|in:N,A', // 'N' para normal, 'A' para admin
        ]);

        // Cria um novo usuário com os dados validados
        $user = User::create($validatedData);

        // Redireciona para a página de lista de usuários
        return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso!');
    }

    /**
     * Display the specified user.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // Retorna a view com os detalhes de um usuário específico
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // Retorna a view para editar um usuário específico
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // Valida os dados do formulário
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:8', // Senha é opcional ao atualizar
            'perm' => 'required|in:N,A', // 'N' para normal, 'A' para admin
        ]);

        // Atualiza os dados do usuário com os dados validados
        $user->update($validatedData);

        // Redireciona de volta para a página de detalhes do usuário
        return redirect()->route('users.show', ['user' => $user])->with('success', 'Usuário atualizado com sucesso!');
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // Remove o usuário do banco de dados
        $user->delete();

        // Redireciona para a página de lista de usuários
        return redirect()->route('users.index')->with('success', 'Usuário excluído com sucesso!');
    }
}
