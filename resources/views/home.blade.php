<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Home Page')
</head>
<body>
    @extends('commonlayouts.header')
    
    @section('content')
    <div class="row" style="margin:50px;">
        <div class="col-md-3">
            <img src="{{ asset('img/img1.png') }}" class="img-thumbnail" height="300px" width="300px">
</div>
<div class="col-md-6">
    <p>
        <h3> Laravel Philosophy </h3>
        Laravel is a web application framework with expressive, elegant syntax. 
        We believe development must be an enjoyable, creative experience to be 
        truly fulfilling. Laravel attempts to take the pain out of development 
        by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.
        Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.
        Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.
</p>
</div>
</div>
<div class="row">
<div class="row" style="margin:50px;">
    <div class="col-md-6">
    <p>
        <h3> What is Laravel used for? </h3>
        Laravel is an easy-to-use web framework that will help you create extensible PHP-based websites and web applications at scale.
        Before creating a web app or website, you need to make a foundational decision as to what technology you are going to use. This is one 
        of the trickiest parts of the web development process. To build something simple, such as an online store or portfolio, you can 
        rely on no-code website creators. If you are looking to build something more advanced, a no-code solution might not be enough. 
        Instead, you should choose a framework and start writing code on it. Laravel is a good choice as an easy-to-use open-source framework 
        for building modern web applications at scale.
</p>
</div>
<div class="col-md-3">
<img src="{{ asset('img/img2.png') }}" class="img-thumbnail" height="600px" width="6400px">
</div>
    @endsection
</body>
</html>