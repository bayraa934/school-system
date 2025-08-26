<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $angiud = SchoolClass::orderBy('id','asc')->get();
        return view('angi.index',compact('angiud'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('angi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    SchoolClass::create([
        'name' => $request->name,
    ]);

    return redirect()->route('angi.index');
}


    /**
     * Display the specified resource.
     */
    public function show(SchoolClass $schoolClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SchoolClass $schoolClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SchoolClass $schoolClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SchoolClass $schoolClass)
    {
        $schoolClass->delete();

        return redirect()->route('angi.index')->with('success', 'Хичээл устгагдлаа');
    }
}
