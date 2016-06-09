<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In/Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/form-elements.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style1.css')}}">
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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/ico/apple-touch-icon-57-precomposed.png')}}">

</head>

<body>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>Medical Revolution</strong> Login &amp; Register Forms</h1>
                    <div class="description">
                        <p>
                            Introducing <strong>"Paper Less Documentation"</strong> in the medical field.
                            Giving you the <strong>Luxury</strong> to get rid of loads of Paper Prescriptions.

                        </p>

                        <a class="btn btn-link-1" href="{{route('pharmreg')}}">Signup/Login as Pharmicist</a>

                        <a class="btn btn-link-1" href="{{route('home')}}">Go back Home</a>
                    </div>


                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    @if(count($errors)>0)
                        <div class="row">
                            <ul>
                                @foreach($errors->all()as$error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Try Again</h3>
                                <p>Username Password don't match</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" id="SignInForm" action="{{route('signin')}}" method="post" class="login-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Username</label>
                                    <input type="text" name="username" minlength="8" placeholder="Username..." class="form-username form-control" id="form-username" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="password" minlength="8" placeholder="Password..." class="form-password form-control" id="form-password" required>
                                </div>
                                <button type="submit" class="btn">Sign in!</button>


                                <input type="hidden" name="country" value="$">
                                <input type="hidden" name="city" value="#">
                                <input type="hidden" name="adress" value="%">
                                <input type="hidden" name="gradcollege" value="&">
                                <input type="hidden" name="pmdc" value="*">
                                <input type="hidden" name="interest" value="(">

                                <input type="hidden" name="_token" value="{{Session::token()}}">
                            </form>
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
    $(#SignInForm).validate();
</script>

<!--[if lt IE 10]>
<script src="assets/js/placeholder.js"></script>
<![endif]-->

</body>

</html>