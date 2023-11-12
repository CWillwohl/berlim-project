<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <title>{{ $title ?? config('app.name') }}</title>
</head>
<body>
    <x-navbar />
        <main class="w-full min-h-screen flex p-8 gap-4 justify-center items-start bg-gradient-to-b from-slate-900 via-gray-800 to-slate-900">
            {{ $slot }}
        </main>
    <x-footer />
    @vite('resources/js/app.js')
</body>
</html>
