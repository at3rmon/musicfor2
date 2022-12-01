@extends('layouts.master')

@section('content')
    <a class="btn btn-primary" href="{{ route('departments.create') }}">Add New Department</a>
    <div>
        @foreach ($departments as $department)
            <div>
                <a class="link-primary" href="{{ route('departments.show', $department) }}">{{ $department->name }}</a>
            </div>
        @endforeach
</div @endsection
