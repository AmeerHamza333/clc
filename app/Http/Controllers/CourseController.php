<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\FoundationCourse;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('role_or_permission:Course access|Course create|Course edit|Course delete', ['only' => ['index', 'show']]);
        $this->middleware('role_or_permission:Course create', ['only' => ['create', 'store']]);
        $this->middleware('role_or_permission:Course edit', ['only' => ['edit', 'update']]);
        $this->middleware('role_or_permission:Course delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        
        $courses = Course::all();
        return view('admin.course', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foundationcourses = FoundationCourse::all();
        // dd($foundationcourses);
        return view('admin.course-add', compact('foundationcourses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $course1= $request->courseduration1;
        // $course2= $request->courseduration2;
        // $courses =  implode($course1,', ', $course2);
        
        // $courses = collect([$course1, $course2]);
        // $output = $courses->implode(',');
        // $courses = json_encode($courses);
        // dd($output);

        $request->validate([
            'coursename' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'courselevel' => 'required',
            'fee' => 'required',
            'courseduration2' =>'required'
        ]);

        $course = new Course;
        $course->coursename   = $request->input('coursename') ;
        $course->startdate   = $request->input('startdate') ;
        $course->enddate   = $request->input('enddate') ;
        $course->courselevel   = $request->input('courselevel') ;
        $checkbox1 = $request->input('mos');

        $chk="";  
        foreach($checkbox1 as $chk1)
           {  
              $chk .= $chk1.",";
           }  
    
         $course-> studymode  =  $chk;

        $course->fee   = $request->input('fee') ;
        $course->courseduration2   = $request->input('courseduration2') ;
$course->save();

        // Course::create([
        //     'coursename' => $request->coursename,
        //     'startdate' => $request->startdate,
        //     'enddate' => $request->enddate,
        //     'courselevel' => $request->courselevel,
        //     'studymode' => $request->studymode,
        //     'fee' => $request->fee,
        //     'courseduration2' => $request->courseduration2,
        // ]);
       

        return redirect('admin/courses')->with('toast_success', 'Task Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $foundationcourses = FoundationCourse::all();
        return view('admin.course-edit', compact('course','foundationcourses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $formField = $request->validate([
            'coursename' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'courselevel' => 'required',
            'studymode' => 'required',
            'fee' => 'required',
            'courseduration2' =>'required',

        ]);

        $course->update($formField);
        return redirect('admin/courses')->with('toast_success', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('admin/courses')->with('toast_success', ' Deleted Successfully!');
    }




// Show all courses in student side
public function showCoursesonStdSide(){


}


}
