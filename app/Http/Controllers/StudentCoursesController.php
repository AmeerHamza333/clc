<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Commencement;
use App\Models\Studentapplication;
use Illuminate\Support\Facades\DB;
class StudentCoursesController extends Controller
{
    public function studentCourses(){
        $course = Course::all();
        return view ('studentdashboard.student-course')->with('course', $course);
    }

    public function studentEnroll($id){
        $courses = Course::find($id);
        $commencements = Commencement::all();
        $cname = $courses-> studymode;
        $str_arr = preg_split ("/\,/", $cname);
      
        return view('student.admissionform')->with('str_arr', $str_arr)->with('courses', $courses)->with('commencements', $commencements);
    }


    public function studentFee(){
        $data = Studentapplication::where('userid', 'like', auth()->user()->id)->where('status', 'like', '1')->get();
        // dd($data);

foreach ($data as $key => $value) {
$data3 =  $value->courseid;
$data2[] = Course::where('id', 'like', $data3)->get();
}




        // $data = DB::table('studentapplications')
        // ->join('courses', 'studentapplications.courseid', 'courses.id')
        // ->select('courses.*', 'studentapplications.said as said', 'studentapplications.status as status', 'studentapplications.firstname as firstname')
        // ->get();


        return view('studentdashboard.student-fee-status', compact(['data2']));

    }


}
