<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {

        $email = 'info@aislgroup.com';
        # code...
        $data = $request->all();


        Mail::to($email)->send(new SendEmail($data));

        Session::flash('message', "Your message has been sent. Thank you!");

        return Redirect::back();


    }
}
