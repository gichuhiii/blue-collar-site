<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use Mail;
use App\Mail\EmailVerificationMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class Auth extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register(string $role=null)
    {
        $role=!in_array($role,["employee","employer"])?"employee":$role;
        return view('auth.register',["role"=>$role]);
    }

    public function add_user()
    {
        return view('auth.adduser');
    }

    public function add_task()
    {
        return view('auth.addtask');
    }

    public function add_category()
    {
        return view('auth.addcategory');
    }

    public function registration(Request $request)
    {
        $request->validate
        (
            [
                'first_name'=>'required',
                'last_name'=>'required',
                'password'=>'required|min:8|max:20',
                'email'=>'required|email|unique:users',
                'phone_number'=>'required',
                'user_role'=>'required',
                'gender'=>'required'
            ]
        );

            $user = new User();
            $user -> first_name = $request->first_name;
            $user -> last_name = $request->last_name;
            $user -> email = $request->email;
            $user -> password = Hash::make($request->password) ;
            $user -> phone_number = $request->phone_number;
            $user -> user_role = $request->user_role;
            $user -> gender = $request->gender;
            $user-> email_verification_code = Str::random(40);
            $res = $user->save();

            Mail::to($request->email)->send(new EmailVerificationMail($user));
            if($res)
            {
                return back()->with('success', 'You have registered successfully. Please check your email for a verification link.');
            }

            else
            {
                return back()->with('fail', 'Oops!! There seems to be a problem');
            }

    }

    public function loginuser(Request $request)
    {
        $request->validate
        (
            [
                'email'=>'required',
                'password'=>'required|min:8|max:20',
            ]
         );

         $user = User::where('email', '=', $request->email)->first();
         if(!$user)
         {
            return back()->with('fail', 'Email not registered');
         }
         else
         {
            if(!$user->email_verified_at)
            {
                return back()->with('fail', 'Email not verified');
            }
            else
            {
                if(!$user->is_active)
                {
                    return back()->with('fail', 'User not active. Contact admin.');
                }
                else
                {
                    if($user)
                    {
                      if(Hash::check($request->password, $user->password))
                      {
                           $request->session()->put('loginId', $user->id);
                           return redirect('dashboard');
                      }
                      else
                      {
                           return back()->with('fail', 'The password is incorrect');
                      }
                    }
           
                    else
                    {
                           return back()->with('fail', 'Invalid Credentials');
                    }
                }
            }
         }
    }

    public function dashboard()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('client.dashboard', compact('data'));
    }

    public function panel()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('admin.panel', compact('data'));
    }
    public function profile()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('employee.profile', compact('data'));
    }
    public function profilea()
    {
        $data = array();
        if(Session::has('loginId'))
        {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('admin.profile', compact('data'));
    }

    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('login');
        }
    }

    public function verify_email($verification_code)
    {
        $user=User::where('email_verification_code', $verification_code)->first();

        if(!$user)
        {
            return redirect('registration')->with('error', 'Invalid URL');
        }
        else
        {
            if($user->email_verified_at)
            {
                return redirect('login')->with('error', 'Email already verified');
            }
            else
            {
                $user->update
                (
                    [
                        'email_verified_at' => \Carbon\Carbon::now()
                    ]
                );

                return redirect('login')->with('success', 'Email verified successfully');

            }
        }
    }
    public function job(Request $request)
    {
        $request->validate
        (
            [
                'job_name'=>'required',
                'job_category'=>'required',
                'job_desc'=>'required',
                'job_location'=>'required',
                'more_info'=>'required',
                'job_pay'=>'required',
            ]
        );


            $job_name = $request->input('job_name');
            $job_category= $request->input('job_category');
            $job_desc=$request->input('job_desc');
            $job_location =$request->input('job_location');
            $more_info = $request->input('more_info');
            $job_pay = $request->input('job_pay');
            $data=array('job_name'=>$job_name,'job_category'=>$job_category,'job_desc'=>$job_desc,'job_location'=>$job_location,'more_info'=>$more_info,'job_pay'=>$job_pay);
            DB::table('created_jobs')->insert($data);
            echo "Job added successfully";
            return redirect('viewjobs');
    }


    public function usersList()
    {
        $user = DB::table('users')->get();
        return view('admin.users', compact('user'));
    }

    public function editUser($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('auth.edit-user', compact('user'));
    }

    public function editProfile($id)
    {
        $data = DB::table('users')->where('id', $id)->first();
        return view('admin.edit-profile', compact('data'));
    }

    public function deleteUser($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return back()->with('user_delete', 'User Removed');
    }

    public function deleteProfile($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return back()->with('user_delete', 'User Removed');
    }

    public function updateUser(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update
        (
            [
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'password'=>$request->password,
                'email'=>$request->email,
                'phone_number'=>$request->phone_number,
                'user_role'=>$request->user_role,
                'gender'=>$request->gender
            ]
        );

    return back()->with('user_update', 'Successful Update');
    }
    public function updateProfile(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update
        (
            [
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'phone_number'=>$request->phone_number
            ]
        );

    return back()->with('user_update', 'Successful Update');
    }
}
