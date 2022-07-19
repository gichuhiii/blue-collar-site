<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <title>TaskIt Job Search</title>
    <!-- Bootstrap core CSS -->
    <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{url('/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
    <link rel="stylesheet" href="{{url('/css/owl.css')}}">

    <link rel="stylesheet" href="{{url('css/linearicons.css')}}">
		<link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{url('css/nice-select.css')}}">					
		<link rel="stylesheet" href="{{url('css/animate.min.css')}}">
		<link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{url('css/main.css')}}">
  </head>
  <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-envelope"></i>taskit@gmail.com</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>0712345678</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>TaskIt <em> Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/jobs">Jobs
                <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item ">              
                    <a class="nav-link" href="/about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/profile">Profile</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 style = "color: #ffffff!important;">JOBS</h1>
            <span>Pick a Job and start earning.</span>
          </div>
        </div>
      </div>
    </div>
    <div class="link">
    <a href="/register/employer">Become an employer</a>
    </div>
    <section class="post-area section-gap">
				<div class="container">
					<div class="row justify-content-center d-flex">
						<div class="col-lg-8 post-list">

            <!-- jobs here -->
            
            @foreach($jobdetails as $jobdetails)
    <div class="single-post d-flex flex-row">
								<div class="thumb">
								</div>
								<div class="details">
									<div class="title d-flex flex-row justify-content-between">
										<div class="titles">
											<a href="single.html"><h4>{{$jobdetails->job_name}}</h4></a>
											<h6>{{$jobdetails->job_category}}</h6>					
										</div>
										<ul class="btns">
											<li><a href="{{"/jobdetails/{$jobdetails->id}"}}">Apply</a></li>
										</ul>
									</div>
									<p>
									{{$jobdetails->job_desc}}
									</p>
									<p class="address">{{$jobdetails->job_location}}</p>
									<p class="address">{{$jobdetails->job_pay}}</p>
								</div>
							</div>
              @endforeach
</div>
</div>
</div> 
     
    <!-- Footer -->
    @extends('layouts.footer')


    <!-- Bootstrap core JavaScript -->
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Additional Scripts -->
    <script src="{{url('/js/custom.js')}}"></script>
    <script src="{{url('/js/owl.js')}}"></script>
    <script src="{{url('/js/slick.js')}}"></script>
    <script src="{{url('/js/accordions.js')}}"></script>

    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>
