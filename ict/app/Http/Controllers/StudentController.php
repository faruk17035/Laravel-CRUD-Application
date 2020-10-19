<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
        
    }
    public function print_laravel()
    {
        return "I love Bangladesh ...!";
    }

    public function store(Request $request)
    {
        //return $request;
        Student::create([
            'name' => $request->name,
            'age'  => $request->age,
            'contact'=> $request->contact,
        ]);
        
        return redirect()->route('student.index');
    }
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }
    public function update(Request $request)
    {
        //return $request;
        $student = Student::findOrFail($request->student_id);
        $student->name = $request->name;
        $student->age = $request->age;
        $student->contact = $request->contact;
        $student->update();
        //return $request;
        //Student::update([
        //    'name' => $request->name,
        //   'age'  => $request->age,
        //   'contact'=> $request->contact,
        //]);
        
        return redirect()->route('student.index');
    }

    public function delete(Request $request)
    {
        //return $request;
        $student = Student::findOrFail($request->id);
        $student->delete();
        return redirect()->route('student.index');
    }
}
