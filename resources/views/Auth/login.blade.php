<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
        <input type="text" name="email" value="" placeholder="Enter Email"/>
        <input type="password" name="password" placeholder="Enter Password"/>
        <button type="submit">Login</button>
        <p class="message">Not Registered? <a href="#">Register</a></p>
    </form>
</body>
</html>