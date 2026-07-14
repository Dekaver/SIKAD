<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use App\Models\Major;
use App\Models\User;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lecturers = lecturer::paginate(10);
        return view('module.lecturer.index', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 'dosen')->whereDoesntHave('lecturer')->get();
        $majors = Major::all();
        return view('module.lecturer.create', compact('users', 'majors'));
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
            "nidn" => "required|numeric",
            "place_of_birth" => "nullable",
            "birth_date" => "nullable",
        ]);

        Lecturer::create($validated);

        return redirect()->route('lecturer.index')->with('success', 'Lecturer created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        return view('module.lecturer.detail', compact('lecturer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $lecturer)
    {
        $users = User::where('role', 'dosen')
            ->where(function ($query) use ($lecturer) {
                $query->whereDoesntHave('lecturer')->orWhere('id', $lecturer->user_id);
            })
            ->get();

        $majors = Major::all();

        return view('module.lecturer.edit', compact('lecturer', 'users', 'majors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, lecturer $lecturer)
    {
        $validated = $request->validate([
            "user_id" => "required",
            "major_id" => "required",
            'name' => 'required',
            'email' => 'required',
            'phone' => 'nullable|numeric',
            'address' => 'nullable',
            "gender" => "required|in:laki_laki,perempuan",
            "nidn" => "required|numeric",
            "place_of_birth" => "nullable",
            "birth_date" => "nullable",
        ]);

        $lecturer->update($validated);

        return redirect()->route('lecturer.index')->with('success', 'Lecturer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(lecturer $lecturer)
    {
        $lecturer->delete();
        return redirect()->route('lecturer.index')->with('success', 'Lecturer deleted successfully');
    }
}
