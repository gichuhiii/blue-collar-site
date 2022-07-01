@extends('layouts.main')
@section('content')
       <!-- Page Content -->
       <div class="page-heading header-text">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Contact Us</h1>
              <span>feel free to send us a message now!</span>
            </div>
          </div>
        </div>
      </div>
  
      <div class="contact-information">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="contact-item">
                <i class="fa fa-phone"></i>
                <h4>Phone</h4>
                <p>Give us a call.</p>
                <a href="#">0712345678</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="contact-item">
                <i class="fa fa-envelope"></i>
                <h4>Email</h4>
                <p>Send us an email.</p>
                <a href="#">contact@company.com</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="contact-item">
                <i class="fa fa-map-marker"></i>
                <h4>Location</h4>
                <p>Nairobi, Kenya<br> AFRICA</p>
                <a href="#">View on Google Maps</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="callback-form contact-us">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Send us a <em>message</em></h2>
                <span>something something something</span>
              </div>
            </div>
            <div class="col-md-12">
              <div class="contact-form">
                @if (Session::has('message_sent'))
                  <div class="alert">
                    {{Session::get('message_sent')}}
                  </div>
                @endif
                <form id="contact" action="{{route('contact.send')}}" method="POST" enctype="multipart/form-data">
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
                        <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div id="map">
    <!-- REMEMBER how to change your own map point
      1. Go to Google Maps
      2. Click on your location point
      3. Click "Share" and choose "Embed map" tab
      4. Copy only URL and paste it within the src="" field below
    -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510564.6498664422!2d36.56720029142611!3d-1.3031933719272915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1sen!2ske!4v1656694608352!5m2!1sen!2ske" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div> 
@endsection
