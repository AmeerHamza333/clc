<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoundationCourse;

class FoundationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = FoundationCourse::all();
        return view('admin.foundationcourse.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.foundationcourse.course-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'coursename' => 'required',
        ]);
        FoundationCourse::create([
            'coursename' => $request->coursename,
        ]);

        return redirect('admin/foundationcourse');

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
    public function edit($id)

    {   
        $course = FoundationCourse::find($id);
     
        return view('admin.foundationcourse.course-edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $formField = $request->validate([
            'coursename' => 'required',
        ]);
        $course = FoundationCourse::find($id);
        $course->update($formField);
        return redirect('admin/foundationcourse');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = FoundationCourse::find($id);
        $course->delete();
        return redirect('admin/foundationcourse');
    }
}
