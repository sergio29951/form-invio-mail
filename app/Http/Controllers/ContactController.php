<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request){
       
        $name = $request->input('name') ;
        $email = $request->input('email');
        $phone = $request->input('phone');
        $mex = $request->input('mex');

        $contactMail = new contactMail($name, $email, $phone, $mex);

        Mail::to('itconsulant@info.it')->send($contactMail);

        return redirect()->Route('contact.grazie');
    }

    public function grazie(){
        return view('grazie');
    }
}
