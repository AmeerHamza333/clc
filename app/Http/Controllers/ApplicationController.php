<?php

namespace App\Http\Controllers;

use App\Models\Studentapplication;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Studentfile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('role_or_permission:Application access|Application create|Application edit|Application delete', ['only' => ['index', 'editit']]);
    }

    public function index()
    {
        
        
        // foreach ($studentapplications as $value) {
        //     $string =$value->marketinginfo;
        // }
        // // $string = $studentapplications->marketinginfo;
       
        // $array = explode(',', $string);
        //  dd($array);

        // // $studentapplications = Studentapplication::query();
        // // $studentapplications = $studentapplications->with('getworkexp')->get();
        // // return  $studentapplications->getworkexp->ftpt;

        // // $student = User::all();
        // //  dd($studentapplications );
        $studentapplications = Studentapplication::all();

        $data = DB::table('studentapplications')
        ->join('courses', 'studentapplications.courseid', 'courses.id')
        ->select('courses.*', 'studentapplications.said as said', 'studentapplications.status as status', 'studentapplications.firstname as firstname')
        ->get();

        return view('admin.application')->with('data', $data);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function editit($id)
    {
        $studentapplications = Studentapplication::find($id);
        // ->leftJoin('workexps', 'studentapplications.id', '=', 'workexps.said');
        // dd($studentapplications);
        //  $bb = $studentapplication->postalcode;
        //  dd( $studentapplications->getworkexp);

        $workexp = Studentapplication::query();
        $workexp = Studentapplication::with('getworkexp')->find($id);
        $workexp = $workexp->getworkexp;
        //sqr
        $aqachieve = Studentapplication::query();
        $aqachieve = Studentapplication::with('getaqachieves')->find($id);
        $aqachieve = $aqachieve->getaqachieves;

        $file = Studentfile::where('applicationid', 'like', $id)->get();

        //sqr
        // dd($aqachieve);
        return view('admin.application-view', compact('studentapplications', 'workexp', 'aqachieve', 'file'));

        //   dd( $aa->ftpt);
        // foreach ( $aa as $value) {
        //         dd($value->ftpt);
        //     }
        // $studentapplications = Studentapplication::query();
        // $studentapplications = Studentapplication::find($id)->with('getworkexp')->get();;
        // foreach ( $studentapplications as $value) {
        //     dd($value->getworkexp->postsheld);
        // }
        // return  $studentapplications->getworkexp->ftpt;
    }

    public function approve($id)
    {
        $data = Studentapplication::find($id);
        $data->status = 1;
        $data->save();
        return redirect('admin/applications');
        // dd($studentapplications->status);
    }
    public function reject($id)
    {
        $data = Studentapplication::find($id);
        $data->status = 2;
        $data->save();
        return redirect('admin/applications');
        // dd($studentapplications->status);
    }
    public function revision($id)
    {
        $data = Studentapplication::find($id);
        $data->status = 3;
        $data->save();
        return redirect('admin/applications');
        // dd($studentapplications->status);
    }
    public function pending($id)
    {
        $data = Studentapplication::find($id);
        $data->status = 4;
        $data->save();
        return redirect('admin/applications');
        // dd($studentapplications->status);
    }
    public function statusChange(Request $request, $id)
    {
        $data = Studentapplication::find($id);
        $message = ($request->message) ? $request->message : "";
        $status = $request->status;
        $data->status = $status;
        $data->statusupdateddate = $message;
        $response = $data->save();
        if ($response) {
            if ($status == 3) {
                $userid = $data->userid;
                $responseUser = User::find($userid);

                $maildata = array(
                    'name' => $responseUser->name,
                    'course' => $data->foundationcourses,
                    'adminmessage' => $message,
                );
                $res = Mail::send('emails.applicationmail', $maildata, function ($message) use ($responseUser) {
                    $message->to($responseUser->email, $responseUser->name)->subject('Student Application');
                    $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                });
            }
            return response()->json(['status' => 'true', 'msg' => "Application is in revision"]);
        } else {
            return response()->json(['status' => 'false', 'msg' => "Something went wrong"]);
        }
    }

    // public function downloadPdf(){
    //     // Pdf::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf')
    //     $pdf = Pdf::loadHTML('admin.application-view')->setOptions(['defaultFont' => 'sans-serif']);;
    //     return $pdf->download('admin.application-view.pdf');
    // }

}