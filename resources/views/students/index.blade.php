@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Students</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary">+ Add Student</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Course</th>
                        <th>Age</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->course }}</td>
                            <td>{{ $student->age }}</td>
                            <td class="text-end">
                                <a href="{{ route('students.show', $student) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Delete this student?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">No students yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $students->links() }}
    </div>
@endsection
