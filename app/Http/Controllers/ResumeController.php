<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{

    public function index(){
        return view('projects');
    }

    public function bio(){
        return view('bio');
    }

    public function education(){
        return view('education');
    }

    public function experience(){
        return view('experience');
    }

    public function contact(){
        return view('contact');
    }


    public function message(Request $request){
        return view('contact', ['data' => $request]);
    }
    //
}
