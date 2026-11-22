@props(['titulo' => null])
<!DOCTYPE html>
<html lang="en" class="min-h-screen">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $titulo ?? 'Daiva' }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('daiva/images/favicon.png') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-skew min-h-screen flex flex-col justify-between">
        <x-daiva.header />
        <x-daiva.main>
            {{ $slot }}
        </x-daiva.main>
        <x-daiva.footer />
    </body>   
</html>

