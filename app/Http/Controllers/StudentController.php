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
       return redirect()->route('student.index')->with('success', 'Оюутан амжилттай нэмэгдлээ');
    }

    public function edit(Student $student)
    {
        $angiud = SchoolClass::orderBy('id','desc')->get();
        return view('student.edit', compact('student', 'angiud'));
    }

    public function update(Request $request, Student $student)
    {
        $image = $student->image;

        if($request->hasFile('image')){
            // Хуучин зургийг устгах (хүсвэл)
            if ($student->image) {
                \Storage::disk('public')->delete($student->image);
            }
            $image = $request->file('image')->store('students','public');
        }

        $student->update([
            'Firstname'=>$request->firstname,
            'Lastname'=>$request->lastname,
            'birthday'=>$request->birthday,
            'gander'=>$request->gander,
            'angi_id'=>$request->angi_id,
            'phone'=>$request->phone,
            'image'=>$image,
        ]);

        return redirect()->route('student.index')->with('success', 'Оюутны мэдээлэл шинэчлэгдлээ');
    }

    public function destroy(Student $student)
    {
         $student->delete();

        return redirect()->route('student.index')->with('success', 'Оюутан устгагдлаа');
    }
}
