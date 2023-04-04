<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'About Page')
</head>
<body>
    @extends('commonlayouts.header')
    
    @section('content')
    <div class="row" style="margin-top: 50px;margin-bottom: 50px;">
    <div class="row">
        <div class="col-md-9 m-auto">
            <h3>About us</h3>
            <p>
            Laravel is a web application framework with expressive, elegant 
            syntax. We believe development must be an enjoyable and creative
            experience to be truly fulfilling. Laravel attempts to take the 
            pain out of development by easing common tasks used in most web 
            projects.
</p>
<p>
            We are the spectators of the rapid boom in the field of digitization 
            and internet usage. Every organization is now shifting to the web platform 
            to increase its presence in the digital space and reach its maximum target audience.
            But, along with the huge positive advancement in the IT field, the cases of 
            cyber-attacks are also increasing and therefore, Cybersecurity is now the topmost 
            topic of concern in the digital world. 
<br>
            According to studies, businesses are going to spend more than $170 billion in 2022.
            Also, statistics say that every 39 seconds, devices that have internet connections 
            are attacked by hackers, and in most cases, they select MSME (Micro-Small and Medium 
            Enterprises) causing 64% of the total. There are plenty of PHP platforms available 
            in the market that are handling the security aspects of an application or software.
            Laravel is one of the popular platforms in this segment and businesses are looking 
            to hire Laravel developers who prefer to opt for this in their web and Laravel mobile 
            apps development projects.Laravel is a web application framework with expressive, elegant 
            syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the 
            pain out of development by easing common tasks used in most web projects.
</p>
<div class="row">
<div class="row" style="margin:50px;">
    <div class="col-md-6">
        <div class="col-md-3">

</div>
</div>

<img src="{{ asset('img/img3.jpeg') }}" class="img-thumbnail" height="300px" width="3200px">
</div>
    @endsection
</body>
</html>