<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>

<body class="h-screen">
    <header>
        @include('components.navigations.main')
    </header>
    <main class="container mx-auto my-8 px-4">
        @yield('content')
    </main>
</body>

</html>
