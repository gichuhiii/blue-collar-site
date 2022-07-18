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
                <a class="nav-link" href="/login">Login | Register</a>
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
            <h1 style="color: #ffffff!important;">Job Details </h1>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="tabs-content" style="display: block;">
              <h4>{{$jobdetails->job_name}}</h4>

              <p>{{$jobdetails->job_category}}</p>

              <br>

              <p>{{$jobdetails->job_desc}}</p>

              <br>

              <p>{{$jobdetails->more_info}}</p>

              <br>

              <p>{{$jobdetails->job_location}}</p>

              <br>

              <p>{{$jobdetails->job_pay}}</p>
            </div>

            <br>
          </div>

          <div class="col-md-4">
            <br>
            <div>
              <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid wc-image">
            </div>
            <br>

            <a href="#" class="filled-button text-center" style="display: block">Apply for this Job</a>

            <br>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-lg-9">
            <div class="tabs-content" style="display: block;">
              <h4>About Employer</h4>

              <p>{{$jobdetails->first_name}} {{$jobdetails->last_name}}</p>

              <br>

              <p>{{$jobdetails->email}}</p>

              <br>

              <p>{{$jobdetails->phone_number}}</p>
            </div>
          </div>

          <!-- <div class="col-lg-3">
            <div class="tabs-content">
              <h4>Contact Details</h4>

              <p>
                <span>Name</span>
              
                <br>
              
                <strong>John Smith</strong>
              </p>
              
              <p>
                <span>Phone</span>
              
                <br>
                
                <strong>
                  <a href="tel:123-456-789">123-456-789</a>
                </strong>
              </p>
              
              <p>
                <span>Mobile phone</span>
              
                <br>
                
                <strong>
                  <a href="tel:456789123">456789123</a>
                </strong>
              </p>
              
              <p>
                <span>Email</span>
              
                <br>
                
                <strong>
                  <a href="mailto:john@carsales.com">john@carsales.com</a>
                </strong>
              </p>
            </div>
          </div>
        </div> -->

        <br>



        <br>
        <br>
        <br>
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
