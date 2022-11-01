<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserSignup extends Controller
{
    //Load the SignUp form default view
    public function index(){

        return view('signUp');
    }

    //Create the Signup form data
    public function createuser(Request $request){
    
         print_r($request->all());
    }

}
