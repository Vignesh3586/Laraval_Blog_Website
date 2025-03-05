<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function show(){
        return view('contact.contactForm');
    }

    public function submitContactForm(Request $request){
       $validated=$request->validate([
        "name"=>"required|max:10",
        "email"=>'required|email',
        'message'=>'required'
       ]);
    
       $data=$request->all();
     if($validated){ 
        return redirect()->route('contact')->with('status','This message has been sent successfully');
    }
    }
}
