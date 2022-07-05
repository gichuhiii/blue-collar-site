<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('/css/admin.css')}}">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>TaskIt</h1>
        </div>
        <ul class="side-links">
            <li><a href="/panel"><i class="fa fa-th" aria-hidden="true"></i>&nbsp; &nbsp; <span>Dashboard</span></a></li>
            <li><a href="/users"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; &nbsp;<span>Users</span></a></li>
            <li><a href="/tasks"><i class="fa fa-tasks" aria-hidden="true"></i>&nbsp; &nbsp;<span>Tasks</span></a></li>
            <li><a href=""><i class="fa fa-comments" aria-hidden="true"></i>&nbsp; &nbsp;<span>Feedback</span></a></li>
            <li><a href=""><i class="fa fa-flag" aria-hidden="true"></i>&nbsp; &nbsp;<span>Reports</span></a></li>
            <li><a href=""><i class="fa fa-user" aria-hidden="true"></i>&nbsp; &nbsp;<span>My Account</span></a></li>
            <li><a href=""><i class="fa fa-cog" aria-hidden="true"></i>&nbsp; &nbsp;<span>Settings</span></a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="{{url('/images/search.png')}}" alt=""></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <!--<img src="notifications.png" alt="">-->
                    <div class="img-case">
                        <img src="{{url('/images/user.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</body>
</html>