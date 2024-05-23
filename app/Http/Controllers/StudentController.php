<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\student;
class studentController extends Controller
{
    public function index(){
        $students = student::all();
        return view('show', compact('students'));
    }

    public function new(){
        return view('new');
    }

    public function create(Request $request): RedirectResponse
    {
        $name = $request->input('name');
        $age = $request->input('age');
        // $des = $request->input('description');
        // $student = new student(array('name'=>$name, 'age'=>$age, 'description'=>$des));
        $student->save();
        return redirect('/');
    }

    public function delete($age){
        $student = student::find($age);
        $student->delete();
        return redirect('/');
    }
    public function edit($age){
        $student = student::find($age);
        
        return view('edit', compact('student'));
    }

    public function update(Request $request, $age): RedirectResponse
    {
        $student = student::find($age);
        $student->name = $request->input('name');
        $student->age = $request->input('age');
        // $student->description = $request->input('description');
        $student->save();
        return redirect('/');
    }
}
