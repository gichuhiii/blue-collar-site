@extends('layouts.admin')
@section('content')
<div class="content">
    <!-- <div class="cards">
        <div class="card">
            <div class="box">
                <h1>2194</h1>
                <h3>Employees</h3>
            </div>
            <div class="icon-case">
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <h1>53</h1>
                <h3>Employers</h3>
            </div>
            <div class="icon-case">
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <h1>5</h1>
                <h3>Admins</h3>
            </div>
            <div class="icon-case">
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <h1>3500</h1>
                <h3>Tasks</h3>
            </div>
            <div class="icon-case">
                <i class="fa fa-tasks" aria-hidden="true"></i>
            </div>
        </div>
    </div> -->
    <div class="content-2">
        <div class="recent-payments">
            <div class="title">
                <h2>Jobs</h2>
                <!-- <a href="#" class="btn">View All</a> -->
            </div>
            <table>
                <tr>
                    <th>Employer</th>
                    <th>Job</th>
                    <th>Amount</th>
                    <th>Location</th>
                </tr>
                @foreach($jobdetails as $jobdetails)
                <tr>
                    <td>{{$jobdetails->user->first_name}} {{$jobdetails->user->last_name}}</td>
                    <td>{{$jobdetails->job_name}}</td>
                    <td>{{$jobdetails->job_pay}}</td>
                    <td>{{$jobdetails->job_location}}</td>
                </tr>
                @endforeach
               
            </table>
        </div>
    </div>
</div>
@endsection