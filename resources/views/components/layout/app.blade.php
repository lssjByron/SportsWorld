<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <x-layout.navbar></x-layout.navbar>

        {{$slot}}
        <footer>Footer</footer>
        <script src="//unpkg.com/alpinejs" defer></script>
    </body>
</html>
