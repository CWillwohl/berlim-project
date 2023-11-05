<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{ $title ?? config('app.name') }}</title>
</head>
<body>
    <x-navbar />
        <main class="w-full min-h-screen flex justify-center items-center bg-gradient-to-b from-slate-900 via-gray-800 to-slate-900">
            {{ $slot }}
        </main>
    <x-footer />
    @vite('resources/js/app.js')
</body>
</html>
