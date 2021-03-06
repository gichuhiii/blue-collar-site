<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{url('/css/dashboarde.css')}}">

	<title>Dashboard</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">My Hub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="/viewappliedjobs">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="/jobs">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Jobs</span>
				</a>
			</li>
			<li>
				<a href="/profile">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Profile</span>
				</a>
			</li>
			<li>
				<a href="/contact">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Feedback</span>
				</a>
			</li>
			<li>
				<a href="/report">
					<i class='bx bxs-group' ></i>
					<span class="text">Reports</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="/profilea">
					<i class='bx bxs-cog' ></i>
					<span class="text">My Account</span>
				</a>
			</li>
			<li>
				<a href="/logout" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Jobs</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<h2>Employee Dashboard</h2>
			<a href="/profilea" class="profile">
				<!-- <img src="img/people.png"> -->
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Jobs</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					
					<table>
						<thead>
							<tr>
								<th>Job Name</th>
								<th>Job Pay</th>
								<th>Employer</th>
								<th>Employer Number</th>
								<th>Employer Email</th>

							</tr>
						</thead>
						<tbody>
						@foreach($jobdetails as $jobdetails)
							<tr>
								<td>{{$jobdetails->job_name}}</td>
								<td>{{$jobdetails->job_pay}}</td>
								<td>{{$jobdetails->first_name}} {{$jobdetails->last_name}}</td>
								<td>{{$jobdetails->phone_number}}</td>
								<td>{{$jobdetails->email}}</td>

								<td><span class="status completed">Applied</span></td>
							</tr>
							@endforeach
						</tbody>
		
					</table>
				</div>
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="{{url('/js/script.js')}}"></script>
</body>
</html>