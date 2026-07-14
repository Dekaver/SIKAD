<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Major;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate(10);
        return view('module.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 'student')->whereDoesntHave('student')->get();
        $majors = Major::all();
        return view('module.student.create', compact('users', 'majors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "user_id" => "required",
            "major_id" => "required",
            'name' => 'required',
            'email' => 'required',
            'phone' => 'nullable|numeric',
            'address' => 'nullable',
            "gender" => "required|in:laki_laki,perempuan",
            "academic_year" => "required",
            "term" => "required",
            "nim" => "required|numeric",
            "place_of_birth" => "nullable",
            "birth_date" => "nullable",
        ]);

        Student::create($validated);

        return redirect()->route('student.index')->with('success', 'Student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('module.student.detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $users = User::where('role', 'student')
            ->where(function ($query) use ($student) {
                $query->whereDoesntHave('student')->orWhere('id', $student->user_id);
            })
            ->get();

        $majors = Major::all();

        return view('module.student.edit', compact('student', 'users', 'majors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            "user_id" => "required",
            "major_id" => "required",
            'name' => 'required',
            'email' => 'required',
            'phone' => 'nullable|numeric',
            'address' => 'nullable',
            "gender" => "required|in:laki_laki,perempuan",
            "nim" => "required|numeric",
            "place_of_birth" => "nullable",
            "birth_date" => "nullable",
            "academic_year" => "required",
            "term" => "required",
        ]);

        $student->update($validated);

        return redirect()->route('student.index')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Student deleted successfully');
    }
}
