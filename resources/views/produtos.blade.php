@extends('layout')

@section('content')
    <h1>Lista de Produtos</h1>

    <ul>
        @foreach($produtos as $produto)
            <li>
                {{ $produto->nome }} - R$ {{ $produto->preco }}
            </li>
        @endforeach
    </ul>
@endsection