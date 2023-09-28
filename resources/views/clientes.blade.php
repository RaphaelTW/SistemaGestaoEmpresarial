@extends('layout')

@section('content')
    <h1>Lista de Clientes</h1>

    <ul>
        @foreach($clientes as $cliente)
            <li>
                {{ $cliente->nome }} - {{ $cliente->email }}
            </li>
        @endforeach
    </ul>

    <button class="button light-mode-button" id="lightModeButton">
        <span class="icon">☀️</span> Light Mode
    </button>

    <button class="button dark-mode-button" id="darkModeButton">
        <span class="icon">🌙</span> Dark Mode
    </button>
@endsection