@extends('layouts.master')

@section('content')
    {{ $department->name }}
    <div class="flex">
        <a href="{{ route('departments.edit', $department) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('departments.destroy', $department) }}" method="post">
            @csrf
            @method('delete')
            @include('components.form.submit', ['value' => 'Delete'])
        </form>
    </div>
@endsection
