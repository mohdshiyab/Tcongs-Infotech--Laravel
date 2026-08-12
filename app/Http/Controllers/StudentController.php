<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the students.
     */
    public function index()
    {
        $students = Student::latest()->paginate(10);

        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new student.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created student in storage.
     */
    public function store(Request $request)
    {
        $validated = $this->validateStudent($request);

        Student::create($validated);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student created successfully!');
    }

    /**
     * Display the specified student.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified student.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified student in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $this->validateStudent($request, $student->id);

        $student->update($validated);

        return redirect()
            ->route('students.index')
            ->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified student from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()
            ->route('students.index')
            ->with('success', 'Student deleted successfully!');
    }

    /**
     * Shared validation rules for store() and update().
     */
    private function validateStudent(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'name'   => ['required', 'string', 'max:255'],
            'email'  => [
                'required',
                'email',
                'max:255',
                'unique:students,email' . ($ignoreId ? ",{$ignoreId}" : ''),
            ],
            'phone'  => ['required', 'string', 'max:20'],
            'course' => ['required', 'string', 'max:255'],
            'age'    => ['required', 'integer', 'min:1', 'max:120'],
        ]);
    }
}
