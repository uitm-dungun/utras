<!DOCTYPE html>
<html x-data="data()" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
        />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>

        <script src="{{ resource_path('js/helpers/charts-bars.js') }}" defer></script>
        <script src="{{ resource_path('js/helpers/charts-lines.js') }}" defer></script>
        <script src="{{ resource_path('js/helpers/charts-pie.js') }}" defer></script>
        <script src="{{ resource_path('js/helpers/focus-trap.js') }}" defer></script>

    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
