<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Patient</title>

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
                                <li><a class="menu active" href="{{route('dashboard')}}" >Home</a></li>
                                <li><a class="menu" href="{{route('patientadd')}}">Add Patient</a></li>
                                <li><a class="menu" href="{{route('account')}}">Edit Account</a></li>
                            </ul>
                        </div><!-- /navbar-collapse -->
                    </div><!-- / .container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</header> <!-- end of header area -->

    <div class="inner-bg">
        <div class="container">
            <div class="form-search form-inline ">
                <form role="form-search" action="{{route('searchpat')}}" method="post" class="registration-from">
                    <div class="form-group ">

                        <label class="sr-only " for="form-first-name">Search</label>
                        <input type="text" class="search-query "  name="username" ; placeholder="Search Patient"  id="form-first-name">

                    </div>



                    <input type="hidden" name="_token" value="{{Session::token()}}">

                    <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span>    Search</button>



                </form>

            </div> <br>
            <div class="row">
                <div class="col-sm-7 text">
                    <h1><strong>Patient</strong> Registration Form</h1>
                    <div class="description">
                        <p>
                            Introducing <strong>"Paper Less Documentation"</strong> in the medical field.
                            Giving you the <strong>Luxury</strong> to get rid of loads of Paper Prescriptions.

                        </p>
                    </div>
                    <div class="top-big-link">
                        <a class="btn btn-link-1" href="{{route('PatDiag')}}">Patient's Diagnosis Form</a>

                    </div>
                </div>
                <div class="col-sm-5 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Register Patient now</h3>
                            <p>Fill in the form below to register Patient:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" id="RegForm" action="{{route('patientreg')}}" method="post" class="registration-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-first-name">Name</label>
                                <input type="text" name="name" placeholder="First name" class="form-first-name form-control" id="first-name" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-cnic">CNIC</label>
                                <input type="text" name="cnic" placeholder="CNIC" class="form-cnic form-control" id="cnic" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                <input type="text" name="username" placeholder="Username" class="form-username form-control" id="username" required>
                            </div>
                            <input type="hidden" name="_token" value="{{Session::token()}}">

                            <button type="submit" class="btn">Register Patient!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





</div>


<!-- Javascript -->
<script src="{{asset('pat/assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('pat/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('pat/assets/js/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('pat/assets/js/retina-1.1.0.min.js')}}"></script>
<script src="{{asset('pat/assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/signup-form.js')}}"></script>
<script> $(#RegForm).validate();</script>



<!--[if lt IE 10]>
<script src="{{asset('assets/js/placeholder.js')}}"></script>
<![endif]-->

</body>

</html>