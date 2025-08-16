<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $oyutanuud = Student::all();
        return view('student.index', compact('oyutanuud'));
    }

    public function create()
    {
        $angiud = SchoolClass::orderBy('id','desc')->get();
        return view('student.create',compact('angiud'));
    }


    public function store(Request $request)
    {
        $image = null;
        if($request->hasFile('image')){
            $image = $request->file('image')->store('students','public');
        }
       Student::create([
        'Firstname'=>$request->firstname,
        'Lastname'=>$request->lastname,
        'birthday'=>$request->birthday,
        'gander'=>$request->gander,
        'angi_id'=>$request->angi_id,
        'phone'=>$request->phone,
        'image'=>$image,
       ]);
       return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
