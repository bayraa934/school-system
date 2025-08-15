<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    
   public function index()
{
    $teachers = Teacher::all(); // эсвэл paginate()

    return view('teacher.index', compact('teachers'));
}


    
    public function create()
    {
    return view('teacher.create');
    }



    public function store(Request $request)
    {
        //
    }

    
    public function show(teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(teacher $teacher)
    {
        //
    }
}
