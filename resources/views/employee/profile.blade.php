<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Profile</title>
	<link rel="stylesheet" href="{{url('/css/profile.css')}}">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="left">
        <h4><span>{{$data->first_name}} </span><span>{{$data->last_name}}</span></h4>
         <p>{{$data->user_role}}</p>
         <ul class="nav">
            <li><a href="/edit-profilee/{{$data->id}}">Edit</a></li>
            <li><a href="">Home</a></li>
            <li><a href="">Delete</a></li>
            <li><a href="/logout">Logout</a></li>
         </ul>
    </div>
    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                <div class="data">
                   <h4>First Name</h4>
                   <p>{{$data->first_name}}</p>
                </div>
                <div class="data">
                  <h4>Last Name</h4>
                   <p>{{$data->last_name}}</p>
             </div>
           </div>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p>{{$data->email}}</p>
                 </div>
                 <div class="data">
                   <h4>Phone</h4>
                    <p>{{$data->phone_number}}</p>
              </div>
            </div>
            <div class="info_data">
                <div class="data">
                   <h4>User Type</h4>
                   <p>{{$data->user_role}}</p>
                </div>
                <div class="data">
                  <h4>Gender</h4>
                   <p>{{$data->gender}}</p>
             </div>
           </div>
        </div>
      
      <div class="cta">      
        <div class="cta_btns">
            <ul>
              <li><a href="/edit-profilee/{{$data->id}}">Edit</a></li>
              <li><a href="#">Delete Account</a></li>
          </ul>
      </div>
    </div>
</div>

</body>
</html>