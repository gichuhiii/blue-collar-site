@extends('layouts.admin')
@section('content')
<div class="content add">
    <div class="add_user_form">
        <div class="formTitle">
            <h1>Add User</h1>
        </div>
        <form action="{{route('registration')}}" method="post">
            @If(Session::has('success'))
                <div class="alert-message green">
                    {{Session::get('success')}}
                </div>
            @endif
            @If(Session::has('fail'))
                <div class="alert-message red">
                    {{Session::get('fail')}}
                </div>
            @endif
            @csrf
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="{{old('first_name')}}" required>
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="{{old('last_name')}}" required>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email"  value="{{old('email')}}" required>
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number" value="{{old('phone_number')}}" required>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"  value="{{old('password')}}" required>
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword" value="" required>
                    <label for="user_role">Gender</label>
                    <select name="gender" id="gender">
                        <option value="1" class="item">Male</option>
                        <option value="2" class="item">Female</option>
                        <option value="3" class="item">Other</option>
                        <option value="4" class="item">Prefer not to say</option>
                    </select>
                    <label for="user_role">Role</label>
                    <select name="user_role" id="user_role">
                        <option value="1" class="item">Employer</option>
                        <option value="2" class="item">Employee</option>
                        <option value="3" class="item">Admin</option>
                    </select>    
            <button type="submit">Sign Up</button><br>
        </form>
    </div>
</div>
@endsection