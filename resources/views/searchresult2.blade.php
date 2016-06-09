<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Result</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/form-elements.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}">
    <link href="{{asset("dist/css/flags.css")}}" rel="stylesheet">
    <script src="{{asset('http://code.jquery.com/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>



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

<!-- Top content -->
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
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <br><br>
                    <h1><strong>Medical Revolution</strong> Patient's Data Records</h1>
                    <div class="description">
                        <p>
                            Introducing <strong>"Paper Less Documentation"</strong> in the medical field.
                            Giving you the <strong>Luxury</strong> to get rid of loads of Paper Prescriptions.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">

                <div class="form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Patient's Data</h3>
                            <h3>{{$message}}</h3>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-database"></i>
                        </div>
                    </div>
                    <table class="table table-condensed" width="647">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Date</th>

                            <th>Prescription</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($users as $user)

                            <tr>


                                <td>{{$user->name}}</td>

                                <td>{{$user->gender}}</td>
                                <td>{{$user->age}}</td>
                                <td>{{$user->date}}</td>

                                <td>{{$user->remarks}}</td>
                            </tr>
                        @endforeach


                        <tr>
                            <td></td>
                            <td colspan="3" align="center"></td>
                        </tr>
                        </tbody>
                    </table>

                    <!-- Footer -->
                    <footer>
                        <div class="container">
                            <div class="row">

                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="footer-border"></div>
                                    <p>Made by <a href="https://www.facebook.com/yasir.thebest#" target="_blank"><strong>Yasir Khalil</strong></a>
                                        having a lot of fun. <i class="fa fa-smile-o"></i></p>
                                </div>

                            </div>
                        </div>
                    </footer>

                    <!-- Javascript -->
                    <script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>
                    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
                    <script src="{{asset('assets/js/jquery.backstretch.min.js')}}"></script>
                    <script src="{{asset('assets/js/scripts.js')}}"></script>
                    <script src="{{asset('dist/js/jquery.flagstrap.js')}}"></script>
                    <script>
                        $('#basic').flagStrap();
                    </script>

                    <!--[if lt IE 10]>
                    <script src="assets/js/placeholder.js"></script>
                    <![endif]-->

</body>

</html>