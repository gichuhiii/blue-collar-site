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
            <li><a href="/panel">Home</a></li>
            <li><a href="">Delete</a></li>
            <li><a href="/logout">Logout</a></li>
         </ul>
    </div>
    <div class="right">
        <form action="{{route('update.profile')}}" method="post">
            <span>{{Session::get('user_update')}}</span>
            @csrf
            <input type="hidden" name="id" id="id" value="{{$data->id}}">
            <div class="info">
                <h3>Information</h3>
                <div class="info_data">
                    <div class="data">
                       <h4>First Name</h4>
                       <input type="text" name="first_name" id="first_name" value="{{$data->first_name}}">
                    </div>
                    <div class="data">
                      <h4>Last Name</h4>
                      <input type="text" name="last_name" id="last_name" value="{{$data->last_name}}">
                 </div>
               </div>
                <div class="info_data">
                     <div class="data">
                        <h4>Email</h4>
                        <input type="text" name="email" id="email" value="{{$data->email}}">
                     </div>
                     <div class="data">
                       <h4>Phone</h4>
                       <input type="text" name="phone_number" id="phone_number" value="{{$data->phone_number}}">
                  </div>
                </div>
                <div class="info_data">
                    <div class="data">
                       <h4>User Type</h4>
                       <input type="text" name="user_role" id="user_role" value="{{$data->user_role}}" readonly>
                    </div>
                    <div class="data">
                      <h4>Gender</h4>
                      <input type="text" name="gender" id="gender" value="{{$data->gender}}" readonly>
                 </div>
               </div>
            </div>
          
          <div class="cta">      
            <div class="cta_btns">
                <ul> 
                  <li><button type="submit">Edit</button></li>
                  <li><a href="/delete-user/{{$data->id}}">Delete Account</a></li>
              </ul>
          </div>
        </form>
        
    </div>
</div>

</body>
</html>