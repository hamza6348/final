<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Patient</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="{{asset('pat/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('pat/assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('pat/assets/css/form-elements.css')}}">
    <link rel="stylesheet" href="{{asset('pat/assets/css/style.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

<!-- Top menu -->
<header class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-5 header-logo">
                <br>
                <a href="index.html"><h1>Medical Revolution </h1></a>
            </div>

            <div class="col-md-7">
                <nav class="navbar navbar-default">
                    <div class="container-fluid nav-bar">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="menu active" href="{{route('PDashboard')}}" >Home</a></li>
                                <li><a class="menu" href="{{route('patientsearch')}}">Search Patient</a></li>
                            </ul>
                        </div><!-- /navbar-collapse -->
                    </div><!-- / .container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</header> <!-- end of header area -->

<!-- Top content -->
<div class="top-content">




    <div class="form-bottom">
        <form role="form" action="{{route('searchpatpharm')}}" method="post" class="registration-from">
            <div class="form-group">
<br> <br> <br> <br> <br> <br>
                <label class="sr-only" for="form-first-name">Search</label>
                <input type="text" name="username" placeholder="Search" class="form-first-name form-control" id="form-first-name">
            </div>



            <input type="hidden" name="_token" value="{{Session::token()}}">

            <button type="submit" class="btn">Search</button>



        </form>

    </div>

</div>


<!-- Javascript -->
<script src="{{asset('pat/assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('pat/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('pat/assets/js/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('pat/assets/js/retina-1.1.0.min.js')}}"></script>
<script src="{{asset('pat/assets/js/scripts.js')}}"></script>

<!--[if lt IE 10]>
<script src="{{asset('assets/js/placeholder.js')}}"></script>
<![endif]-->

</body>

</html>