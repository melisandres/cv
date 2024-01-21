<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        //make sure the email is an email
        $request->validate([
            'courriel' => 'required|email'
        ]);

        $to_name = "melisandre";
        $to_email = "melisandre.schofield@gmail.com";
        $body =     "<p>from: ".$request->nom.", ".$request->prenom."</p>
                    <p>tier requested: ".$request->tier."</p>
                    <p>address: ".$request->courriel."</p>
                    <p>message: ".$request->message."</p>";

        Mail::send('email.mail',['name'=> $to_name, 'body'=>$body], 
        function($message) use ($to_name, $to_email){
            $message->to($to_email, $to_name)->subject('Someone says hi from your portfolio site!'); 
        });

    
        return view('contact', ['data' => $request]);
    }
}
