@extends('layouts.master')

@section('content')
    <div class="container mx-auto my-8">
        @if (session('success'))
            <div class="alert alert-success shadow-lg mb-4">
                <span>{{ session('success') }}</span>
            </div>
        @endif
        <div class="grid grid-cols-2 gap-4">
            <section class="p-8 rounded-md w-full bg-neutral text-neutral-content">
                <h2 class="text-3xl font-semibold text-center">Update Profile Info</h2>
                <form action="{{ route('profile.update') }}" method="POST" class="mt-4 flex flex-col gap-2">
                    @csrf
                    @method('PATCH')
                    @include('components.form.email', [
                        'value' => auth()->user()->email,
                        'disabled' => true,
                    ])
                    @include('components.form.text', [
                        'value' => auth()->user()->first_name,
                        'name' => 'first_name',
                    ])
                    @include('components.form.text', [
                        'value' => auth()->user()->last_name,
                        'name' => 'last_name',
                    ])
                    @include('components.form.submit')
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
    </div>
@endsection
