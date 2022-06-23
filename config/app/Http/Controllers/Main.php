<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class Main extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function about()
    {
        return view('client.about');
    }
    public function contact()
    {
        return view('client.contact');
    }

    public function sendEmail(Request $request)
    {
        $details =
        [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg
        ];

        Mail::to('enolaanne89@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Your message has been sent successfully');
    }

}