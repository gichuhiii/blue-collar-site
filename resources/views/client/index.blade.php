@extends('layouts.main')
@section('content')
        <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Welcome to TaskIt</h6>
                  <h4>Check Out Available <br>Jobs</h4>
                  <p>Take up a Job and earn</p>
                  <a href="/jobs" class="filled-button">Jobs</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Welcome to TaskIt</h6>
                  <h4>Register as an<br> Employer today !</h4>
                  <p>Need an extra hand ? Create a job and let someone to do the work for you.</p>
                  <a href="/register/employer" class="filled-button">SignUp as an employer</a>
            </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Welcome to TaskIt</h6>
                  <h4>Any enquiry or<br>Feedback?</h4>
                  <p>Send us an email and we will get back to you.</p>
                  <a href="/contact" class="filled-button">Contact Us</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Request a call back right now ?</h4>
          </div>
          <div class="col-md-4">
            <a href="/contact" class="border-button">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="{{url('/images/employer.jpg')}}" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <h2>Become an <em>employer today</em></h2>
                <p>Need someone to accomplish tasks today? Sign UP as an employer !</p>
                <a href="/register/employer" class="filled-button">Become an employer</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Request a <em>call back</em></h2>
              <span>Etiam suscipit ante a odio consequat</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              @if (Session::has('message_sent'))
                  <div class="alert">
                    {{Session::get('message_sent')}}
                  </div>
                @endif
              <form id="contact" action="{{route('contact.send')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone Number" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="msg" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="border-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>
@endsection