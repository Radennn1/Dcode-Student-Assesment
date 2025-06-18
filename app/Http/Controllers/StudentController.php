<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{

    public function index(Request $request)
    {
        $query = Student::query();

        if ($request->has('search') && $request->search != '') {
            $query->where('full_name', 'like', '%' . $request->search . '%');
        }

        $students = $query->paginate(5);

        return view('dashboard', compact('students'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'department' => 'required|string|max:255',
            'enrollment_year' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        Student::create($validatedData);

        return redirect()->route('dashboard')->with('success', 'Student created successfully');
    }

    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('show', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        if(!$student) {
            return redirect()->route('dashboard')->with('error', 'Student not found');
        }

        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students,email,' . $student->id,
            'department' => 'required|string|max:255',
            'enrollment_year' => 'required|digits:4|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        $student->update($validatedData);

        return redirect()->route('dashboard')->with('success', $student->full_name.' updated successfully');
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);

        if(!$student) {
            return redirect()->route('dashboard')->with('error', 'Student not found');
        }

        // Delete the student
        $student->delete();

        return redirect()->route('dashboard')->with('success', $student->full_name.' deleted successfully');
    }
}