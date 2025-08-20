<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/content.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>

    <!-- Google Fonts Import -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Unbounded + Nunito Sans -->
    <link
        href="https://fonts.googleapis.com/css2?family=Unbounded:wght@400;500;600;700;800&family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Lemon Tuesday Font -->
    <style>
        @font-face {
            font-family: 'Lemon Tuesday';
            src: url('https://fonts.cdnfonts.com/css/lemon-tuesday') format('woff2'),
                url('https://fonts.cdnfonts.com/css/lemon-tuesday') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
    </style>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div id="app">
        @include('includes.fixed.nav')
        <main class="py-4">
            @yield('content')
        </main>
    </div>

     @stack('scripts')
</body>

</html>
