<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::paginate(10);
        return view('module.major.index', compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('module.major.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:majors|min:3',
            'code' => 'required|unique:majors|min:2|max:3',
            'description' => 'required|min:10',
        ]);

        $major = Major::create($request->all());
        return redirect()->route('program-studi.index')->with('success', 'Major created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Major $major)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Major $program_studi)
    {
        return view('module.major.edit', compact('program_studi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Major $program_studi)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'min:3',
                Rule::unique('majors')->ignore($program_studi->id)
            ],
            'code' => [
                'required',
                'string',
                'min:2',
                'max:4',
                Rule::unique('majors')->ignore($program_studi->id)
            ],
            'description' => 'required|min:10',
        ]);

        $program_studi->update($request->all());
        return redirect()->route('program-studi.index')->with('success', 'Major updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $program_studi)
    {
        $program_studi->delete();
        return redirect()->route('program-studi.index')->with('success', 'Major deleted successfully');
    }
}
