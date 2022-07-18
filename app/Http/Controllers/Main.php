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

    public function jobdetails($id)
    {
        $job=Job::select('*')->where('id',$id)->first();

        $jobdetails=DB::table('created_jobs')
        ->join('users','created_jobs.user_id','=','users.id')
        ->select('created_jobs.*','users.first_name','users.last_name','users.email','users.phone_number')
        ->where('created_jobs.id',$id)
        ->first();
        return view('client.jobdetails',['jobdetails'=>$jobdetails]);

    }
    public function employer()
    {
        return view('employer.employer');
    }
    public function viewemployees()
    {
        $employee=DB::table('users');
        $employee->join('applied_users','users.id','=','applied_users.user_id');
        $employee->select('users.*','applied_users.job_id');
        $employee->where('users.user_role','employee');

        $employee->join('created_jobs','applied_users.job_id','=','created_jobs.id');
        $employee->select('users.*','applied_users.job_id','created_jobs.job_name','created_jobs.job_pay');
        $employee->where('created_jobs.user_id',Auth::user()->id);
        
        $employee=$employee->get();
        return view('employer.viewemployees',['employee'=>$employee]);
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
