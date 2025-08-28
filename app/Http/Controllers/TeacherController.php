<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Бүх багшийг жагсаах
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher.index', compact('teachers'));
    }

    // Шинэ багш нэмэх form харуулах
    public function create()
    {
        return view('teacher.create');
    }

    // Шинэ багш хадгалах
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname'  => 'required|string|max:255',
            'email'     => 'nullable|email|max:255',
            'phone'     => 'nullable|string|max:20',
        ]);

        Teacher::create([
            'firstname' => $request->firstname,
            'lastname'  => $request->lastname,
            'email'     => $request->email,
            'phone'     => $request->phone,
        ]);

        return redirect()->route('teacher.index')->with('success', 'Багш амжилттай нэмэгдлээ!');
    }

    // Багшийн дэлгэрэнгүй харах (хэрэглэхгүй бол хоосон орхиж болно)
    public function show(Teacher $teacher)
    {
        return view('teacher.show', compact('teacher'));
    }

    // Засах form харуулах
    public function edit(Teacher $teacher)
    {
        return view('teacher.edit', compact('teacher'));
    }

    // Зассан багшийн мэдээлэл хадгалах
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname'  => 'required|string|max:255',
            'email'     => 'nullable|email|max:255',
            'phone'     => 'nullable|string|max:20',
        ]);

        $teacher->update([
            'firstname' => $request->firstname,
            'lastname'  => $request->lastname,
            'email'     => $request->email,
            'phone'     => $request->phone,
        ]);

        return redirect()->route('teacher.index')->with('success', 'Багшийн мэдээлэл амжилттай шинэчлэгдлээ!');
    }

    // Багшийг устгах
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('teacher.index')->with('success', 'Багш устгагдлаа!');
    }
}
