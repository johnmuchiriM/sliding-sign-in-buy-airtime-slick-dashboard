<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function dashboard(){
        return view('auth.dashboard');
    }



    function check(Request $request){

        //The Inputs given
        // return $request->input();

        //Validate Requests

        $request->validate([

            'phonenumber'=> 'required|msisdn',
            'pin'=> 'required|min:4|max:12'



        ]);
    }
}
