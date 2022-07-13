@extends('layouts.admin')
@section('content')
<div class="content add">
    <div class="add_user_form">
        <div class="formTitle">
            <h1>Add User</h1>
        </div>
        <form action="{{route('update.user')}}" method="post">
           <span>{{Session::get('user_update')}}</span>
            @csrf
                <br>
                    <input type="hidden" name="id" id="id" value="{{$user->id}}">
                    <label for="first_name">First Name</label>
                    <input type="text" name="first_name" id="first_name" value="{{$user->first_name}}">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" value="{{$user->last_name}}">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email"  value="{{$user->email}}">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number" value="{{$user->phone_number}}">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"  value="{{$user->password}}">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword" value="">
                    <label for="user_role">Gender</label>
                    <select name="gender" id="gender" value="{{$user->gender}}">
                        <option value="1" class="item">Male</option>
                        <option value="2" class="item">Female</option>
                        <option value="3" class="item">Other</option>
                        <option value="4" class="item">Prefer not to say</option>
                    </select>
                    <label for="user_role">Role</label>
                    <select name="user_role" id="user_role" value="{{$user->user_role}}">
                        <option value="1" class="item">Employer</option>
                        <option value="2" class="item">Employee</option>
                        <option value="3" class="item">Admin</option>
                    </select>    
            <button type="submit">Update</button><br>
        </form>
    </div>
</div>
@endsection