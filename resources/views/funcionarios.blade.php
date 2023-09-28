@extends('layout')

@section('content')
    <h1>Lista de Funcionários</h1>

    <ul>
        @foreach($funcionarios as $funcionario)
            <li>
                {{ $funcionario->nome }} - {{ $funcionario->cargo }}
            </li>
        @endforeach
    </ul>
@endsection