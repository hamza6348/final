<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diagnose Patient</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/form-elements.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}">

    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script src="{{asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
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
<!--header section -->
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
</header> <!-- end of header area -->s
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>Medical Revolution</strong> Patient Diagnosis Form</h1>
                    <div class="description">
                        <p>
                            Introducing <strong>"Paper Less Documentation"</strong> in the medical field.
                            Giving you the <strong>Luxury</strong> to get rid of loads of Paper Prescriptions.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">

                <div class="form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Patient Diagnosis Form</h3>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-pencil"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" id="signUpForm" action="{{route('PatSymp')}}" method="post" class="registration-form">
                            <div class="form-group">
                                <label class="sr-only" for="form-first-name">Name</label>
                                <input type="text" name="name" placeholder="Name" class="form-first-name form-control" id="form-first-name" value="{{$name}}">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-username">Patient's ID</label>
                                <input type="text" name="username" placeholder="Patient's ID" class="form-username form-control" id="form-username" value="{{$username}}">
                            </div>
                            <div class="form-group">

                                <label class="col-md-2 control-label" style="color:white; margin-bottom:10px;">Gender</label>
                                <div class="col-md-10">
                                    <select name="gender" id="form-gender" class="form-gender form-control" placeholder="Gender" type="text" style="margin-bottom:10px;">

                                        <option value="item1">Male</option>
                                        <option value="item2">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="form-age">Age</label>
                                <input type="text" name="age" placeholder="Age" class="form-age form-control" id="form-age" required/>
                            </div>




                            <div class="form-group">
                                <label class="col-md-2 control-label" style="color:white;">Date</label>
                                <div class='col-md-10 input-group date' id='datetimepicker1'>
                                    <input type='date' name="date" id="form-date" class="form-control" placeholder="Date" required />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="sr-only" for="form-symp1">Symptoms 1</label>
                                <input type="text" name="symp1" placeholder="Symptoms 1" class="form-symp1 form-control" id="form-symp1">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-symp2">Symptoms 2</label>
                                <input type="text" name="symp2"  placeholder="Symptoms 2" class="form-symp2 form-control" id="form-symp2">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-symp3">Symptoms 3</label>
                                <input type="text" name="symp3" placeholder="Symptoms 3" class="form-symp3 form-control" id="form-symp3">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-symp4">Symptoms 4</label>
                                <input type="text" name="symp4" placeholder="Symptoms 4" class="form-symp4 form-control" id="form-symp3">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-remarks">Remarks</label>
			                        	<textarea name="remarks" placeholder="Remarks" cols="40" rows="20"
                                                  class="form-address form-control" id="form-remarks" required></textarea>
                            </div>


                    </div>

                    <button type="submit" class="btn">Save Changes</button>
                    <input type="hidden" name="_token" value="{{Session::token()}}">
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
</div>


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
<script>
    $(#signUpForm).validate();
</script>

<!--[if lt IE 10]>
<script src="{{asset('assets/js/placeholder.js')}}"></script>
<![endif]-->

</body>

</html>