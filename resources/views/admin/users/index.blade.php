@extends('layouts.app')

@section('content')
    <h1>Gestão de Usuários</h1>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} - Roles: {{ $user->roles->pluck('name')->join(', ') }}</li>
        @endforeach
    </ul>
@endsection