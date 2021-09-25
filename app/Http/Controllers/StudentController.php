<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentCourses(Student $student){
        $data = Student::where('id', $student->id)->with('courses')->get();
        return response()->json($data);
    }
}
