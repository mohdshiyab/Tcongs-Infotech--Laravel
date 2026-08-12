@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="p-5 bg-white rounded shadow-sm">
        <h1 class="mb-3">Welcome 👋</h1>
        <p class="text-muted">
            This is a simple Student Management System built with Laravel, demonstrating
            MVC architecture, routing, Eloquent ORM, and MySQL.
        </p>
        <a href="{{ route('students.index') }}" class="btn btn-primary">Go to Students</a>
    </div>
@endsection
