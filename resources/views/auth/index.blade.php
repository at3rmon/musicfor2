@extends('layouts.minimal')

@section('content')
    <section class="p-8 rounded-md max-w-md w-full bg-neutral text-neutral-content">
        <h1 class="text-3xl font-semibold text-center">{{ __('forms.login.title') }}</h1>
        <form action={{ route('auth.create') }} method="post" class="mt-4 flex flex-col gap-2">
            @csrf

            @include('components.form.email')

            @include('components.form.password')

            @include('components.form.submit', ['value' => __('forms.login.submit')])
        </form>

        @if ($errors->any())
            <ul class="text-error text-sm mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </section>
@endsection
