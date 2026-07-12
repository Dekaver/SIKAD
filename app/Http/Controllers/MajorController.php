<?php

namespace App\Http\Controllers;

use App\Models\major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = major::paginate(10);
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

        $major = major::create($request->all());
        return redirect()->route('program-studi.index')->with('success', 'Major created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(major $major)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(major $major)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, major $major)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(major $major)
    {
        //
    }
}
