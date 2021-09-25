<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use App\Models\CourseGroup;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function semesters(){
        $data = Semester::all();
        return response()->json($data);

    }

    public function semesterDetails(Semester $semester){
        return response()->json($semester);
    }

    public function semesterCourseGroups(Semester $semester){
        $data = CourseGroup::where('id', $semester->id)->with('course', 'course.students', 'lecturer')->get();
        return response()->json($data);
    }
}
