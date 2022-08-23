<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="h-full">
   @yield('content')
</body>
</html>
