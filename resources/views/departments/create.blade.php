@extends('layouts.master')

@section('content')
    <form action="{{ route('departments.store') }}" method="post">
        @csrf
        @include('components.form.text', ['name' => 'name'])
        @include('components.form.submit', ['value' => 'Add'])
    </form>
@endsection
