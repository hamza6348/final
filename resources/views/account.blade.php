<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="{{asset('edit/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('edit/assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('edit/assets/css/form-elements.css')}}">
    <link rel="stylesheet" href="{{asset('edit/assets/css/style.css')}}">
    <link href="{{asset('edit/dist/css/flags.css')}}" rel="stylesheet">
    <script src="{{asset('http://code.jquery.com/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <!--check for the src of above link-->



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{{asset('edit/assets/ico/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('edit/assets/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('edit/assets/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('edit/assets/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('edit/assets/ico/apple-touch-icon-57-precomposed.png')}}">

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
<div class="row">
    <!-- left column -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <br><br>
                    <h1><strong>Medical Revolution</strong> Doctor Profiles</h1>
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
                            <h3>Profile</h3>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-edit"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" id="signUpForm" action="{{route('account.save')}}" method="post" class="registration-form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="sr-only" for="form-first-name">Name</label>
                                <input type="text" name="name" placeholder="Name" class="form-first-name form-control" id="form-first-name" value="{{$user->name}}">
                            </div>

                            <div class="form-group">

                                    <div class="form-group">
                                        <label class="sr-only" for="form-country">Select Country</label>
                                        <div id="basic" data-input-name="country"></div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-city">City</label>
                                <input type="text" name="city" placeholder="City" class="form-city form-control" id="form-city">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-address">Address</label>
			                        	<textarea name="adress" placeholder="Address" cols="40" rows="15"
                                                  class="form-address form-control" id="form-address"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-pmdc">PMDC Number</label>
                                <input type="text" name="pmdc" placeholder="PMDC Number" class="form-pmdc form-control" id="form-pmdc">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-college">Graduation College</label>
                                <input type="text" name="gradcollege"  placeholder="Graduation College" class="form-college form-control" id="form-college">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-year">Graduation Year</label>
                                <input type="text" name="year" placeholder="Graduation Year" class="form-year form-control" id="form-year">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-intrests">Intrests</label>
                                <input type="text" name="interest" placeholder="Intrests" class="form-intrests form-control" id="form-Intrests">
                            </div>

                            <div class="form-group">
                                <input type="file" name="image" placeholder="Upload" class="form-upload form-control" id="form-upload">

                            </div>



                            <button type="submit" class="btn">Save Changes</button>

                            <input type="hidden" name="_token" value="{{Session::token()}}">
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-sm-4">
                <br><br>
                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Profile Photo</h3>
                    </div>
                    <div class="form-top-right">
                        <i class="fa fa-file-photo-o"></i>
                    </div>
                </div>
                <div class="form-bottom">
                    <div class="form-group">
                        <label class="sr-only" for="form-upload">UploadImage</label>
                        @if (Storage::disk('local')->has($user->name . '-' . $user->id . '.jpg'))
                        <img src="{{ route('account.image', ['filename' => $user->name . '-' . $user->id . '.jpg']) }}" class="avatar img-circle center-block" alt="avatar">
                        @endif
                            <br><br>



                    </div>

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
<script src="{{asset('edit/assets/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('edit/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('edit/assets/js/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('edit/assets/js/scripts.js')}}"></script>
<script src="{{asset('edit/dist/js/jquery.flagstrap.js')}}"></script>
<script>
    $('#basic').flagStrap();
</script>

<!--[if lt IE 10]>
<script src="{{asset('edit/assets/js/placeholder.js')}}"></script>
<![endif]-->

</body>

</html>