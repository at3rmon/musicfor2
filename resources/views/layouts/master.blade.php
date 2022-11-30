<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
</head>

<body>
    @auth
        {{ auth()->user()->first_name }}
        <form action={{ route('auth.destroy') }} method="post">
            @csrf
            <button type="submit">logout</button>
        </form>
    @endauth
    @yield('content')
</body>

</html>
