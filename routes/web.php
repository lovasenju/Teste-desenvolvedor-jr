<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rotas de perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rotas para usuários com papel 'comum'
Route::middleware(['auth'])->group(function () {
    Route::get('/produtos', function () {
        if (!auth()->user()->hasRole('comum')) {
            abort(403, 'Acesso negado');
        }
        return view('produtos.index');
    })->name('produtos');

    Route::get('/categorias', function () {
        if (!auth()->user()->hasRole('comum')) {
            abort(403, 'Acesso negado');
        }
        return view('categorias.index');
    })->name('categorias');

    Route::get('/marcas', function () {
        if (!auth()->user()->hasRole('comum')) {
            abort(403, 'Acesso negado');
        }
        return view('marcas.index');
    })->name('marcas');
});

// Rotas do admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
    // Aqui você pode adicionar mais rotas do admin se precisar
});

require __DIR__.'/auth.php';