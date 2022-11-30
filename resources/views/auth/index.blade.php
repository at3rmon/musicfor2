@extends('layouts.master')

@section('content')
    <form action={{ route('auth.create') }} method="post">
        @csrf
        <input type="email" name="email" value={{ old('email') }}>
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
    
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
