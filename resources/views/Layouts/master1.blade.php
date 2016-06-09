<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="{{URL::to('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/style.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="{{URL::to('pat/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('pat/assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('pat/assets/css/form-elements.css')}}">
    <link rel="stylesheet" href="{{URL::to('pat/assets/css/style.css')}}">
    <script src="{{URL::to('js/modernizr.js')}}"></script>

    <link href="{{asset("dist/css/flags.css")}}" rel="stylesheet">
    <script src="{{asset('http://code.jquery.com/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>
</head>
<body>
@include('includes.header')
<div>
    @yield('content')
</div>








<script src="{{URL::to('js/jquery-2.1.1.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{URL::to('js/gmaps.js')}}"></script>
<script src="{{URL::to('js/smoothscroll.js')}}"></script>
<script src="{{URL::to('js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('js/custom.js')}}"></script>
<script src="{{URL::to('pat/assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{URL::to('pat/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('pat/assets/js/jquery.backstretch.min.js')}}"></script>
<script src="{{URL::to('pat/assets/js/retina-1.1.0.min.js')}}"></script>
<script src="{{URL::to('pat/assets/js/scripts.js')}}"></script>



<script src="{{URL::to('jss/app.js')}}"></script>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</body>
</html>