<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Prachtig">
    <title>{{ config('app.name', 'Craftville') }}</title>

    <!-- Scripts -->
    <script src="{{ url('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-900 h-screen antialiased leading-none">
<div id="app" class="flex flex-col h-screen justify-between">
    @include('snippets.header')
    <div class="mb-auto">
        @yield('content')
    </div>
    @include('snippets.footer')
</div>
</body>
</html>
