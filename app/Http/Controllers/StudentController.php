<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    // Оюутнуудын жагсаалт харуулах
    public function index()
{
    $oyutanuud = Student::with('schoolClass')->get(); // schoolClass харилцаагаар ангийн нэртэй авна
    return view('student.index', compact('oyutanuud'));
}


    // Оюутан нэмэх form
    public function create()
    {
        $angiud = SchoolClass::orderBy('id', 'desc')->get();
        return view('student.create', compact('angiud'));
    }

    // Оюутан хадгалах
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname'  => 'required|string|max:255',
            'birthday'  => 'required|date',
            'gander'    => 'required|in:Эрэгтэй,Эмэгтэй',
            'angi_id'   => 'required|exists:school_classes,id',
            'phone'     => 'nullable|string|max:20',
            'image'     => 'nullable|image|max:2048',
        ]);

        // Зураг хадгалах
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('students', 'public');
        }

        Student::create($validated);

        return redirect()->route('student.index')->with('success', 'Оюутан амжилттай нэмэгдлээ');
    }

    // Засах form
    public function edit(Student $student)
    {
        $angiud = SchoolClass::orderBy('id', 'desc')->get();
        return view('student.edit', compact('student', 'angiud'));
    }

    // Мэдээлэл шинэчлэх
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname'  => 'required|string|max:255',
            'birthday'  => 'required|date',
            'gander'    => 'required|in:Эрэгтэй,Эмэгтэй',
            'angi_id'   => 'required|exists:school_classes,id',
            'phone'     => 'nullable|string|max:20',
            'image'     => 'nullable|image|max:2048',
        ]);

        // Зураг шинэчлэх
        if ($request->hasFile('image')) {
            if ($student->image) {
                Storage::disk('public')->delete($student->image);
            }
            $validated['image'] = $request->file('image')->store('students', 'public');
        }

        $student->update($validated);

        return redirect()->route('student.index')->with('success', 'Оюутны мэдээлэл шинэчлэгдлээ');
    }

    // Оюутан устгах
    public function destroy(Student $student)
    {
        if ($student->image) {
            Storage::disk('public')->delete($student->image);
        }

        $student->delete();

        return redirect()->route('student.index')->with('success', 'Оюутан устгагдлаа');
    }
}
