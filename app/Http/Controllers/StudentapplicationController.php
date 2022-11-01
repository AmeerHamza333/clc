<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Workexp;
use App\Models\Aqachieve;
use Illuminate\Http\Request;
use App\Models\Studentapplication;
use App\Models\Studentfile;

class StudentapplicationController extends Controller
{
     // public function index(){
     //      return view('admin.application-view');
     //  }

      public function index(){
          $courses =Course::all();
          return view('student.admissionform', compact('courses'));
      }
  



    public function storeApplicationForm(Request $req){
 
     
     $sa = new Studentapplication;
     $sa->userid   =  auth()->user()->id;
     $sa->firstname   =  $req->input('firstname');
     $sa-> lastname  =  $req->input('lastname');
     $sa-> title  =  $req->input('title');
     $sa->pfname   =  $req->input('pfname');
     $sa->dob   =  $req->input('dob');
     $sa-> gender  =  $req->input('gender');
     $sa-> address  =  $req->input('paddress');
     $sa-> city  =  $req->input('city');
     $sa-> postalcode  =  $req->input('postalcode');
     $sa-> hometelno  =  $req->input('telno');
     $sa-> mobile  =  $req->input('mobile');
     $sa-> email  =  $req->input('email');
     $sa-> cob  =  $req->input('cob');
     $sa-> nationality  =  $req->input('nationality');
     $sa-> edtouk  =  $req->input('edtouk');
// terms and condition
     $sa-> courselevel  =  $req->input('fcourse');
     $sa->  undergraduatecourses =  $req->input('ucourse');
     $sa-> modeofstudy  =  $req->input('mofstudy');
     $sa-> commencement  =  $req->input('commencement');
     $sa-> courseduration  =  $req->input('cduration');
     $sa->  feespaidby =  $req->input('feespaidby');
     $sa-> engfirstlang  =  $req->input('flang');
     $sa-> anyengcourse  =  $req->input('courseineng');
     $sa-> proficiencytest  =  $req->input('proftest');
     $sa-> reasonforchoosing  =  $req->input('reason');
     $sa-> futureplan  =  $req->input('futureplans');
     $sa-> kindofemp  =  $req->input('employment');
     $sa-> interestandhobies  =  $req->input('interest');
     $sa-> specialneeds  =  $req->input('facilities');
     $sa-> statebenifits  =  $req->input('benifits');
     $sa-> criminalrecord  =  $req->input('criminalrecord');
     $sa-> specificity  =  $req->input('capacity');
     $sa-> coursechoosen  =  $req->input('suitability');
     $sa-> intellectual  =  $req->input('intellectual');
     $sa-> fluetandlogicoral  =  $req->input('fluetoral');
     $sa->  fluetandlogicwritten =  $req->input('fluewritten');
     $sa-> ability  =  $req->input('ability');
     $sa->  perseverance =  $req->input('perseverance');
     $sa->  leadership =  $req->input('leadership');
     $sa-> creativity  =  $req->input('creativity');
     $sa-> concern  =  $req->input('concern');
     $sa->  refreesname =  $req->input('rname');
     $sa-> refreessign  =  $req->input('rsign');
     $sa->  refreesdate =  $req->input('rdate');
    //  marketing info
    
    $checkbox1 = $req->input('techno');
    $chk="";  
    foreach($checkbox1 as $chk1)
       {  
          $chk .= $chk1.",";
       }  

     $sa-> marketinginfo  =  $chk;
       
     $sa-> ethicorigin  =  $req->input('ethnic');
     $sa->  religion =  $req->input('religion');
     $sa->courseid = $req->input('courseid');
// status

     $sa->save();
     
     $student_id =   $sa->said;



     $noinput1 = $req->input('eanumberinput') + 1;
     
     for($i=0; $i < $noinput1; $i++){
     $aqachieve = new Aqachieve;
     $aqachieve-> examdate  =   $req['examdate1'][$i];
     $aqachieve-> examingboard  =   $req['examboard'][$i];
     $aqachieve-> subjects  =   $req['subject'][$i];
     $aqachieve-> qualification  =  $req['qualification'][$i];
     $aqachieve->  resultachieved =   $req['result'][$i];
     $aqachieve->  said =  $student_id;
     $aqachieve-> iscompleted =  $req->input(' ');
      $aqachieve->save();
     }



     $noinput2 = $req->input('epnumberinput') + 1;
     for($i=0; $i < $noinput2; $i++){
     $aqachieve = new Aqachieve;
     $aqachieve-> examdate  =   $req['examdate2'][$i];
     $aqachieve-> examingboard  =   $req['examboard2'][$i];
     $aqachieve-> subjects  =   $req['subject2'][$i];
     $aqachieve-> qualification  =  $req['qualification2'][$i];
     $aqachieve->  resultachieved =   $req->input('');
     $aqachieve->  said =  $student_id;
     $aqachieve-> iscompleted =  $req->input(' ');
      $aqachieve->save();
     }

     

      $noinput = $req->input('numberinput') + 1;
     
      for($i=0; $i < $noinput; $i++){
         $workexpsfirst = new Workexp;
     $workexpsfirst-> datefrom  =  $req['datefrom'][$i];
     $workexpsfirst-> dateto  =  $req['dateto'][$i];
     $workexpsfirst-> ftpt  =   $req['ftptfrom'][$i];
     $workexpsfirst-> postsheld  =  $req['postheld'][$i];
     $workexpsfirst->  orgname =  $req['orgname2'][$i];
     $workexpsfirst-> orgaddress =  $req->input('');
     $workexpsfirst-> despofduties =  $req['briefdis'][$i];
     $workexpsfirst-> said =  $student_id;
     $workexpsfirst-> iscompleted =  $req->input(' ');
     $workexpsfirst->save();
}


$workexps = new Workexp;
     $workexps-> datefrom  =  $req->input('datef');
     $workexps-> dateto  =  $req->input('');
     $workexps-> ftpt  =  $req->input('ftptf');
     $workexps-> postsheld  =  $req->input('postheldf');
     $workexps->  orgname =  $req->input('orgname');
     $workexps-> orgaddress =  $req->input('orgaddress');
     $workexps-> despofduties =  $req->input('brief');
     $workexps-> said =  $student_id;
     $workexps-> iscompleted =  $req->input(' ');
      $workexps->save();

      $nouploadlength = $req->input('uploadinput');
      for($i=0; $i < $nouploadlength; $i++){
          $uploadimg = new Studentfile;
       
          $uploadimg->filename = $req['filename'][$i];
               // $extension = $file->getClientOriginalExtension();
               // $filename = time().'.'.$extension;
               // $file->move('studentfiles/files', $file);
               // $uploadimg->filename=$file;
       
           $uploadimg-> applicationid =  $student_id;
           $uploadimg->save();
      }


     return redirect('/dashboard');
    }
}
