@extends('layouts.master')

@section('content')
    <form action="{{ route('departments.update', $department) }}" method="post">
        @csrf
        @method('patch')
        @include('components.form.text', ['name' => 'name', 'value' => $department->name])
        @include('components.form.submit', ['value' => 'Update'])
    </form>
@endsection
