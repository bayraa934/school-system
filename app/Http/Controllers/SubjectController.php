<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('subject.index', compact('subjects'));
    }

    public function create()
    {
        return view('subject.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Subject::create($request->only('name'));

        return redirect()->route('subject.index')->with('success', 'Хичээл амжилттай нэмлээ');
    }

    public function edit(Subject $subject)
    {
        return view('subject.edit', compact('subject'));
    }

    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $subject->update($request->only('name'));

        return redirect()->route('subject.index')->with('success', 'Хичээл амжилттай засагдлаа');
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->route('subject.index')->with('success', 'Хичээл устгагдлаа');
    }
}

