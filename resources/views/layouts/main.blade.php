<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Developers Conference 2023') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .custom-shape-divider-bottom-1674392093 {
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                overflow: hidden;
                line-height: 0;
                transform: rotate(180deg);
            }

            .custom-shape-divider-bottom-1674392093 svg {
                position: relative;
                display: block;
                width: calc(100% + 1.3px);
                height: 150px;
            }

            .custom-shape-divider-bottom-1674392093 .shape-fill {
                fill: #FFFFFF;
            }
        </style>
    </head>

    <body class="font-sans text-gray-900 antialiased">
        <!-- Top navbar -->
        @include('shared.header')

        @yield('content')

        @include('shared.footer')
    </body>

</html>
