@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
    <h1 class="h3 mb-3">Edit Student</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('students.update', $student) }}" method="POST">
                @csrf
                @method('PUT')
                @include('students._form')

                <button type="submit" class="btn btn-primary">Update Student</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
