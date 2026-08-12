@extends('layouts.app')

@section('title', 'Add Student')

@section('content')
    <h1 class="h3 mb-3">Add Student</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                @include('students._form')

                <button type="submit" class="btn btn-primary">Create Student</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
