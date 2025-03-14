<?php

namespace App\Http\Controllers;

use App\Mail\MyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
  public function show(){
    return view('contact.contactForm');
  }

    public function sendMail(Request $request){
        // validate input
        $request->validate([
        "name"=> "required|max:20|string",
        "mail"=> "required|email",
        "message"=>"required",
        ]);
        dd($request);

        // data
        $data=[
          "name"=>$request->input('name'),
          "email"=>$request->input('email'),
          "message"=>$request->input('message'),
        ];
        
        // send mail
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new MyMail($data))->view('mail.view')->with('data',$this->$data);

         back()->with('status',"Mail has been sent successfully");

    }
}
