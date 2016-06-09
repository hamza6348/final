@extends('layouts.master1')

@section('title')
    Search result
@endsection

@section('content')

    <!-- Top content -->
    <div class="top-content">

        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
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
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <table class="table table-condensed" width="647">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Date</th>
                                <th>Symptom1</th>
                                <th>Symptom2</th>
                                <th>Symptom3</th>
                                <th>Symptom4</th>
                                <th>Remarks</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)

                                <tr>


                                    <td>{{$user->name}}</td>

                                    <td>{{$user->gender}}</td>
                                    <td>{{$user->age}}</td>
                                    <td>{{$user->date}}</td>
                                    <td>{{$user->symptom1}}</td>
                                    <td>{{$user->symptom2}}</td>
                                    <td>{{$user->symptom3}}</td>
                                    <td>{{$user->symptom4}}</td>
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

                      </div>

         </div>
</div>
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

@endsection