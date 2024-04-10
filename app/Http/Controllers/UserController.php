<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (count($request->all()) == 0) {
            $users = User::all();
        } else {
            $users = User::query();
            if ($request->filled('name')) {
                $users->where('name', 'like', '%' . $request->name . '%');
            }
            if ($request->filled('email')) {
                $users->where('email', 'like', '%' . $request->email . '%');
            }
            if ($request->filled('perm')) {
                $users->where('perm', $request->perm);
            }
            $users = $users->get();
        }
        return view('_admin.users.index', compact("users"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = new User();
        return view('_admin.users.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $fields = $request->validated();
        /*$user =User::create($fields); */
        $user = new User();
        $user->fill($fields);
        $user->password = Hash::make('password');
        if ($request->hasFile('img')) {
            $img_path = $request->file('img')->store(
                'public/users_fotos'
            );
            $user->img = basename($img_path);
        }
        $user->save();
        $user->sendEmailVerificationNotification();
        return redirect()->route('admin.users.index')
            ->with('success', 'Utilizador criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('_admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('_admin.users.edit', compact('user'));
    }


    public function __construct()
    {
        $this->authorizeResource(User::class, 'user');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        if (auth()->user()->can('updateRole', $user)) {
            $fields = $request->validated();
        } else {
            $fields = $request->except("perm");
        }
        $fields = $request->validated();
        $user->fill($fields);
        if ($request->hasFile('img')) {
            if (!empty($user->img)) {
                Storage::disk('public')->delete('users_fotos/' .
                    $user->img);
            }
            $img_path =
                $request->file('img')->store('public/users_fotos');
            $user->img = basename($img_path);
        }

        $user->save();
        return redirect()->route('admin.users.index')
            ->with('success', 'Utilizador atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with(
            'success',
            'Utilizador eliminado com sucesso'
        );
    }
    public function destroy_photo(User $user)
    {
        Storage::disk('public')->delete('user_fotos/' . $user->img);
        $user->img = null;
        $user->save();
        return redirect()->route('admin.users.edit', $user)->with(
            'success',
            'A foto do utilizador foi apagada com sucesso.'
        );
    }
    public function send_reactivate_email(User $user)
    {
        $user->sendEmailVerificationNotification();
        return redirect()->route('admin.users.edit', $user)->with(
            'success',
            'O email foi enviado com sucesso para o utilizador'
        );
    }
}
