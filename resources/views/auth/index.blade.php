@extends('layouts.minimal')

@section('content')
    <div class="flex justify-center items-center w-full min-h-screen">
        <section class="p-8 rounded-md max-w-md w-full bg-neutral text-neutral-content">
            <h1 class="text-3xl font-semibold text-center">Login Form</h1>
            <form action={{ route('auth.create') }} method="post" class="mt-4 flex flex-col gap-2">
                @csrf

                @include('components.inputs.email')

                @include('components.inputs.password')

                @include('components.inputs.submit')

            </form>

            @if ($errors->any())
                <ul class="text-error text-sm mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </section>
    </div>
@endsection
