<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
</head>
<body>
    <div class="container">
        <h1>Register</h1>
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
                <div class="form-control">
                    <input type="text" name="first_name" required>
                    <label>First Name</label>
                </div>
                <div class="form-control">
                    <input type="text" name="last_name" required>
                    <label>Last Name</label>
                </div>
                <div class="form-control">
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="form-control">
                    <input type="text" name="phone_number" required>
                    <label>Phone Number</label>
                </div>
                <div class="form-control">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="form-control">
                    <input type="password" name="cpassword" required>
                    <label>Confirm Password</label>
                </div>
                <div class="form-control">
                    <select name="gender" id="gender">
                        <option value="1" class="item">Male</option>
                        <option value="2" class="item">Female</option>
                        <option value="3" class="item">Other</option>
                        <option value="4" class="item">Prefer not to say</option>
                    </select>
                </div>
                <div class="form-control">
                    <input type="hidden" name="user_role" value="{{$role}}">
                </div>          
                
                <button type="submit" class="btn">Register</button>
                <p class="text">Already Registered?&nbsp;<a href="/login">Login</a></p>
        </form>
    </div>

    <script src="{{url('/js/login.js')}}"></script>
</body>
</html>