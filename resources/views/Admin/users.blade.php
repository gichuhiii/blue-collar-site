@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="tab">
    </div>
    <div class="content-3">
        <div class="recent-payments">
            <div class="title">
                <h2>All Users</h2>
                <a href="/adduser" class="btn">Add User</a>
            </div>

            <span>{{Session::get('user_update')}}</span>
            <table>
                <tr>
                    <th>User Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Role</th>
                    <th>Gender</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                @foreach($user as $user)

                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->user_role}}</td>
                        <td>{{$user->gender}}</td>
                        <td style="align-items: right"><a href="/edit-user/{{$user->id}}" class="btn">Edit</a></td>
                        <td style="align-items: right"><a href="/delete-user/{{$user->id}}" class="btn">Delete</a></td>
                    </tr>

                @endforeach
           
            </table>
        </div>
    </div>
</div>
@endsection