<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>

    <script src="{{asset('js/modernizr.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <![endif]-->

</head>
<body>

<!-- ====================================================
header section -->
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
                                <li><a class="menu active" href="#home" >Home</a></li>
                                <li><a class="menu" href="#about">about us</a></li>
                                <li><a class="menu" href="#service">our services </a></li>

                                <li><a class="menu" href="#team">our team</a></li>
                                <li><a class="menu" href="#contact"> contact us</a></li>
                                <li><a class="menu" href="{{route('patientsearch')}}">Search Patient</a></li>
                                <li><a class="menu" href="{{route('logoutp')}}">Logout</a></li>

                            </ul>
                        </div><!-- /navbar-collapse -->
                    </div><!-- / .container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</header> <!-- end of header area -->

<section class="slider" id="home">
    <div class="container-fluid">
        <div class="row">
            <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="header-backup"></div>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset('img/Slide-one.jpg')}}" alt="">
                        <div class="carousel-caption">
                            <h1>introducing</h1>
                            <p>paper-less documentation in the medical field</p>
                            <button>learn more</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('img/Slide-two.jpg')}}" alt="">
                        <div class="carousel-caption">
                            <h1>introducing</h1>
                            <p>paper-less documentation in the medical field</p>
                            <button>learn more</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('img/Slide-three.jpg')}}" alt="">
                        <div class="carousel-caption">
                            <h1>introducing</h1>
                            <p>paper-less documentation in the medical field</p>
                            <button>learn more</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('img/slide-four.jpg')}}" alt="">
                        <div class="carousel-caption">
                            <h1>introducing</h1>
                            <p>paper-less documentation in the medical field</p>
                            <button>learn more</button>
                        </div>
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section><!-- end of slider section -->

<!-- about section -->
<section class="about text-center" id="about">
    <div class="container">
        <div class="row">
            <h2>about us</h2>
            <h4>We are providing a platform to all the doctors around the world to get rid of Hectic Paper Work</h4>
            <div class="col-md-4 col-sm-6">
                <div class="single-about-detail clearfix">
                    <div class="about-img">
                        <img class="img-responsive" src="{{asset('img/item1.jpg')}}" alt="">
                    </div>
                    <div class="about-details">
                        <div class="pentagon-text">
                            <h1>C</h1>
                        </div>
                        <h3>Children’s specialist</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-about-detail">
                    <div class="about-img">
                        <img class="img-responsive" src="{{asset('img/item2.jpg')}}" alt="">
                    </div>
                    <div class="about-details">
                        <div class="pentagon-text">
                            <h1>W</h1>
                        </div>

                        <h3>Children’s specialist</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-about-detail">
                    <div class="about-img">
                        <img class="img-responsive" src={{asset('img/item3.jpg')}} alt="">
                    </div>
                    <div class="about-details">
                        <div class="pentagon-text">
                            <h1>M</h1>
                        </div>
                        <h3>Children’s specialist</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of about section -->


<!-- service section starts here -->
<section class="service text-center" id="service">
    <div class="container">
        <div class="row">
            <h2>our services</h2>
            <h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h4>
            <div class="col-md-3 col-sm-6">
                <div class="single-service">
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="heart img-responsive" src="{{asset('img/service1.png')}}" alt="">
                        </div>
                    </div>
                    <h3>Heart problem</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-service">
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="brain img-responsive" src="{{asset('img/service2.png')}}" alt="">
                        </div>
                    </div>
                    <h3>brain problem</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-service">
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="knee img-responsive" src="{{asset('img/service3.png')}}" alt="">
                        </div>
                    </div>
                    <h3>knee problem</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-service">
                    <div class="single-service-img">
                        <div class="service-img">
                            <img class="bone img-responsive" src="{{asset('img/service4.png')}}" alt="">
                        </div>
                    </div>
                    <h3>human bones problem</h3>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of service section -->


<!-- team section -->
<section id="team">
    <div class="container">
        <h2>Our Team</h2>
        <hr class="sep">
        <p>Designers Behind This Work</p>
        <div class="row wow fadeInUp" data-wow-delay=".3s">
            <div class="col-md-4">
                <div class="team">
                    <img class="img-responsive center-block" src="{{asset('img/Yasir.jpg')}}" alt="1">
                    <h4>Yasir Khalil</h4>
                    <p>Designer</p>
                    <div class="team-social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team">
                    <img class="img-responsive center-block" src="{{asset('img/Hamza.jpg')}}" alt="2">
                    <h4>Hamza Nasim</h4>
                    <p>Developer</p>
                    <div class="team-social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team">
                    <img class="img-responsive center-block" src="{{asset('img/Hadaiq.jpg')}}" alt="3">
                    <h4>Hadaiq Ahmad</h4>
                    <p>Photographer</p>
                    <div class="team-social-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of team section -->

<!-- map section -->
<div class="api-map" id="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 map" id="map"></div>
        </div>
    </div>
</div><!-- end of map section -->

<!-- contact section starts here -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="contact-caption clearfix">
                <div class="contact-heading text-center">
                    <h2>contact us</h2>
                </div>
                <div class="col-md-5 contact-info text-left">
                    <h3>contact information</h3>
                    <div class="info-detail">
                        <ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li></ul>
                        <ul><li><i class="fa fa-map-marker"></i><span>Address:</span> 123 Some Street , London, UK, CP 123</li></ul>
                        <ul><li><i class="fa fa-phone"></i><span>Phone:</span> (032) 987-1235</li></ul>
                        <ul><li><i class="fa fa-fax"></i><span>Fax:</span> (123) 984-1234</li></ul>
                        <ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@doctor.com</li></ul>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1 contact-form">
                    <h3>leave us a message</h3>

                    <form class="form">
                        <input class="name" type="text" placeholder="Name">
                        <input class="email" type="email" placeholder="Email">
                        <input class="phone" type="text" placeholder="Phone No:">
                        <textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                        <input class="submit-btn" type="submit" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of contact section -->

<!-- footer starts here -->
<footer class="footer clearfix">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 footer-para">
                <p>&copy;Mostafizur All right reserved</p>
            </div>
            <div class="col-xs-6 text-right">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-skype"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- script tags
============================================================= -->
<script src="{{asset('js/jquery-2.1.1.js')}}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{asset('js/gmaps.js')}}"></script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>