<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    // Mostra todos os usuários com suas permissões
   public function index()
{
    // Carrega os usuários junto com as permissões E roles
    $users = User::with(['permissions', 'roles'])->get();

    return view('admin.users.index', compact('users'));
}

    // (Opcional para depois) Editar usuário
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }
}