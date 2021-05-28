<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function index(){
        return view('sample');
    }
    public function sendmail(Request $request){
        $email = $request->email;
        $subject = $request->subject;
        $body = $request->body;
        $details =["email"=>$email,'subject'=>$subject,'body'=>$body];
        Mail::to($email)->send(new \App\Mail\Gmail($details));

    }
}
