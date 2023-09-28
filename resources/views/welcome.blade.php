<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
@extends('layout')

@section('content')
<h1>Bem-vindo ao Sistema de Gestão Empresarial</h1>

<p>Este é um sistema para gerenciar clientes, produtos, pedidos e funcionários.</p>

<p>Utilize a barra de navegação para acessar as diferentes seções do sistema.</p>
@endsection
</body>

</html>