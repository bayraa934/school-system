<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = Enrollment::with(['student', 'subject'])->get();

        return view('enrollment.index', compact('enrollments'));
    }
    public function create()
    {
        $subjects = Subject::all();
        $students = Student::all();

        return view('enrollment.create', compact('subjects', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){


    Enrollment::create([
        'student_id' => $request->student_id,
        'subject_id' => $request->subject_id,
    ]);

    return redirect()->route('enrollment.index')->with('success', 'Хичээл сонгогдлоо!');

}




    /**
     * Display the specified resource.
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
}
