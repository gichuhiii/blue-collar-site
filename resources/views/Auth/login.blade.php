<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
</head>
<body class="login">
    <div class="container">
        <h1>Login</h1>
        <form method="post" class="login-form" action="{{route('loginuser')}}">
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
            <div class="form-control">
                <input type="text" name="email" required>
                <label>Your Email</label>
            </div>
            <div class="form-control">
                <input type="password" name="password" required>
                <label>Your Password</label>
            </div>
            <button type="submit" class="btn">Login</button>
            <p class="text">Not Registered?&nbsp;<a href="/register">Register</a></p>
        </form>
    </div>

    <script src="{{url('/js/login.js')}}"></script>
</body>
</html>