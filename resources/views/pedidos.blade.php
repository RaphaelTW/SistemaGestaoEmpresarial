@extends('layout')

@section('content')
    <h1>Lista de Pedidos</h1>

    <ul>
        @foreach($pedidos as $pedido)
            <li>
                Cliente: {{ $pedido->cliente->nome }} | Produto: {{ $pedido->produto->nome }} | Quantidade: {{ $pedido->quantidade }}
            </li>
        @endforeach
    </ul>
@endsection
