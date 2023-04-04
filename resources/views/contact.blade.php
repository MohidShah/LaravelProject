<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title', 'Contact Page')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
</head>
<body>
@extends('commonlayouts.header')

@section('content')
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-mf">
                <div id="contact" class="box-shadow-full">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="title-box-2">
                        <h5 class="title-left">
                         <h3> Contact Us </h3>
                         <p>If you have any queries please free to contact us.</p>
                        </h5>
                      </div>
                      <div>
                        <form action="{{url('/')}}/contact" method="post">
                         @csrf
                            <div class="row">
                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <strong><label>Name:</label> </strong>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                
                              </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                <strong><label>Phone:</label> </strong>
                                  <input type="phone" class="form-control" name="phone" id="phone" placeholder="Your Phone No" required>
                                
                                </div>
                            <div class="col-md-122 mb-3">
                              <div class="form-group">
                              <strong><label>Email:</label> </strong>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                               
                              </div>
                            </div>
                            <div class="col-md-122 mb-3">
                              <div class="form-group">
                              <strong><label>Subject:</label> </strong>
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                              </div>
                            </div>
                            <div class="col-md-122">
                              <div class="form-group">
                              <strong><label>Message:</label> </strong>
                                <textarea class="form-control" name="message" rows="5" placeholder="Type message...." required></textarea>
                               
                              </div>
                            </div>
                           
                            <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
          
      </section>
      @endsection
</body>
</html>