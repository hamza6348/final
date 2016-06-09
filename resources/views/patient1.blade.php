@extends('layouts.master1')

@section('title')
    Account
@endsection

@section('content')
    <!-- Top menu -->
    <nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Bootstrap Registration Form Template</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
        </div>
    </nav>

    <!-- Top content -->
    <div class="top-content">

        <div class="inner-bg">
            <div class="container">
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

                        <div class="top-big-link">
                            <a class="btn btn-link-1" href="{{route('dashboard')}}">Back to Home</a>

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
                            <form role="form" action="{{route('patientreg')}}" method="post" class="registration-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Name</label>
                                    <input type="text" name="name" placeholder="First name" class="form-first-name form-control" id="form-first-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-cnic">CNIC</label>
                                    <input type="text" name="cnic" placeholder="CNIC" class="form-cnic form-control" id="form-cnic">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Username</label>
                                    <input type="text" name="username" placeholder="Username" class="form-username form-control" id="form-username">
                                </div>
                                <input type="hidden" name="_token" value="{{Session::token()}}">

                                <button type="submit" class="btn">Register Patient!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="form-bottom">
            <form role="form" action="{{route('searchpat')}}" method="post" class="registration-from">
                <div class="form-group">

                    <label class="sr-only" for="form-first-name">Search</label>
                    <input type="text" name="username" placeholder="Search" class="form-first-name form-control" id="form-first-name">
                </div>



                <input type="hidden" name="_token" value="{{Session::token()}}">

                <button type="submit" class="btn">Search</button>



            </form>

        </div>

    </div>
@endsection