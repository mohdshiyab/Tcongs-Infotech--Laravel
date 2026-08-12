@extends('layouts.app')

@section('title', 'Student Details')

@section('content')
    <h1 class="h3 mb-3">Student Details</h1>

    <div class="card shadow-sm" style="max-width: 500px;">
        <div class="card-body">
            <dl class="row mb-0">
                <dt class="col-4">Name</dt>
                <dd class="col-8">{{ $student->name }}</dd>

                <dt class="col-4">Email</dt>
                <dd class="col-8">{{ $student->email }}</dd>

                <dt class="col-4">Phone</dt>
                <dd class="col-8">{{ $student->phone }}</dd>

                <dt class="col-4">Course</dt>
                <dd class="col-8">{{ $student->course }}</dd>

                <dt class="col-4">Age</dt>
                <dd class="col-8">{{ $student->age }}</dd>
            </dl>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('students.edit', $student) }}" class="btn btn-primary">Edit</a>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
