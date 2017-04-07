<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data=['name'=>$request['name'],'email'=>$request['email'],'subject'=>$request['subject'],'message_text'=>$request['message']];

        Mail::send('email',$data,function ($message){
            $message->to("apechemistrypanthiya@gmail.com")->subject('WEB SITE MAIL');
        });

        session()->flash('msg', 'Your message was successfully sent');

        return redirect()->back();

    }
}
