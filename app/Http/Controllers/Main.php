<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use DB;
use Illuminate\Support\Facades\Auth;

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

    public function jobs()
    {
        $job = DB:: select('select * from created_jobs');
        return view('client.jobs',['job'=>$job]);
    }

    public function jobdetails()
    {   
        return view('client.jobdetails');
        
    }

    public function employer()
    {
        return view('employer.employer');
    }
    public function viewemployees()
    {
        return view('employer.viewemployees');
    }
    public function viewjobs()
    {
        return view('employer.viewjobs',['job'=>Auth::user()->jobs]);
    }

    public function employee()
    {
        return view('employee.dashboarde');
    } 

}
