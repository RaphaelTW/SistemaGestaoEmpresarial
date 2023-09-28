<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de Gestão Empresarial</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>

    </header>

    <main>
        @yield('content')
    </main>

    <footer>

    </footer>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
