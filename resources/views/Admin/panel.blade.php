@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="cards">
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
    </div>
    <div class="content-2">
        <div class="recent-payments">
            <div class="title">
                <h2>Recent Tasks</h2>
                <a href="#" class="btn">View All</a>
            </div>
            <table>
                <tr>
                    <th>Employer</th>
                    <th>Task</th>
                    <th>Amount</th>
                    <th>Option</th>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Washing per kg</td>
                    <td>Ksh.500</td>
                    <td style="align-items: right"><a href="#" class="btn">View</a></td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Washing per kg</td>
                    <td>Ksh.500</td>
                    <td><a href="#" class="btn">View</a></td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Washing per kg</td>
                    <td>Ksh.500</td>
                    <td><a href="#" class="btn">View</a></td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Washing per kg</td>
                    <td>Ksh.500</td>
                    <td><a href="#" class="btn">View</a></td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Washing per kg</td>
                    <td>Ksh.500</td>
                    <td><a href="#" class="btn">View</a></td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Washing per kg</td>
                    <td>Ksh.500</td>
                    <td><a href="#" class="btn">View</a></td>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Washing per kg</td>
                    <td>Ksh.500</td>
                    <td><a href="#" class="btn">View</a></td>
                </tr>
            </table>
        </div>
        <div class="new-students">
            <div class="title">
                <h2>New Users</h2>
                <a href="#" class="btn">View All</a>
            </div>
            <table>
                <tr>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>option</th>
                </tr>
                <tr>
                    <td><img src="{{url('/images/user.png')}}" alt=""></td>
                    <td>John Steve Doe</td>
                    <td><i class="fa fa-info" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td><img src="{{url('/images/user.png')}}" alt=""></td>
                    <td>John Steve Doe</td>
                    <td><i class="fa fa-info" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td><img src="{{url('/images/user.png')}}" alt=""></td>
                    <td>John Steve Doe</td>
                    <td><i class="fa fa-info" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td><img src="{{url('/images/user.png')}}" alt=""></td>
                    <td>John Steve Doe</td>
                    <td><i class="fa fa-info" aria-hidden="true"></i></td>
                </tr>

            </table>
        </div>
    </div>
</div>
@endsection