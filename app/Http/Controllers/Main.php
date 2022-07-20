<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\User;
use App\Models\Employee;

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
        $jobdetails =Job::all();
        return view('client.jobs',['jobdetails'=>$jobdetails]);
    }

    public function jobdetails(Job $job)
    {
        return view('client.jobdetails',["jobdetails"=> $job->load("user")]);
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
    public function apply(Job $job)
    {
        DB::table('applied_users')->insert(
            [
                'user_id'=>Auth::user()->id,
                'job_id'=>$job->id,
                'employer_id'=>$job->user_id
            ]
        );
        $jobdetails =Job::all();
        return view('client.jobs',['jobdetails'=> Job::all()]);
    }
    public function viewappliedjobs()
    {
        $jobdetails = DB::table('applied_users');
        $jobdetails->join('users','applied_users.employer_id','=','users.id');
        $jobdetails->select('users.*','applied_users.employer_id');
        $jobdetails->where('users.user_role','employer');

        $jobdetails->join('created_jobs','applied_users.job_id','=','created_jobs.id');
        $jobdetails->select('users.*','applied_users.job_id','created_jobs.job_name','created_jobs.job_pay');
        $jobdetails->where('applied_users.user_id',Auth::user()->id);

        $jobdetails=$jobdetails->get();
        // $jobdetails =Job::all();
        return view('employee.dashboarde',['jobdetails'=>$jobdetails]);
    }
}
