<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    //
    public function index()
    {
        $student = student::all();
        return view('student.index', compact('student'));
    }
    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $student = new student;
        $student->name = $request->input('name');
        if ($request->hasfile('profile')) {
            $file = $request->file('profile');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uplods/students', $filename);
            $student->profile = $filename;
        }

        $student->save();

        return redirect()->back()->with('status', 'student img added');
    }
}
