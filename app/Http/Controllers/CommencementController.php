<?php

namespace App\Http\Controllers;

use App\Models\Commencement;
use Illuminate\Http\Request;

class CommencementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commencement = Commencement::all();
        return view('admin.commencement.index', compact('commencement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.commencement.create');
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
            'sessionname' => 'required',
            'sessionstartdate' => 'required',
            'sessionenddate' => 'required',
        ]);
        Commencement::create([
            'sessionname' => $request->sessionname,
            'sessionstartdate' => $request->sessionstartdate,
            'sessionenddate' => $request->sessionenddate,
        ]);

        return redirect('admin/commencement');

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
        $commencements = Commencement::find($id);
        return view('admin.commencement.edit', compact('commencements'));
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
        $commencements = Commencement::find($id);
        $formField = $request->validate([
            'sessionname' => 'required',
            'sessionstartdate' => 'required',
            'sessionenddate' => 'required',
        ]);
        $commencements->update($formField);
        return redirect('admin/commencement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commencements = Commencement::find($id);
        $commencements->delete();
        return redirect('admin/commencement');
    }
}
