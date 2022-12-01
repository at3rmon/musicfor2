@extends('layouts.master')

@section('content')
    @if (session('success'))
        <div class="alert alert-success shadow-lg mb-4 flex justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif
    <div class="grid grid-cols-12 gap-4">
        <section class="p-8 rounded-md w-full bg-neutral text-neutral-content col-span-12 md:col-span-6">
            <h2 class="text-3xl font-semibold text-center">{{ __('forms.update_profile.title') }}</h2>
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
                @include('components.form.submit', ['value' => __('forms.update_profile.submit')])
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
