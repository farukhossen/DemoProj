<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Student;
use \App\Models\Course;

class StudentController extends Controller
{
    public function index(){
        $student = Student::find(1);
        $courses = $student->courses;
        foreach($courses as $course){
            var_dump($course->number);
        }
    }
}
