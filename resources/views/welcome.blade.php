<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Livewire 3</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>

    <body class="p-6 font-sans">
        <main class="max-w-4xl mx-auto space-y-6">
            <header class="flex justify-end p-4">
                @livewire('avatar')
            </header>

            <section>
                @livewire('pull-request.all')
            </section>
        </main>
        @livewireScripts
    </body>
</html>
