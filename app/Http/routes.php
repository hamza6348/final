<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





Route::group(['middleware'=>['web']],function (){



    Route::get('/', function () {
        return view('landingpage');
    })->name('home');


    Route::get('/signup',[
            'uses'=>'UserController@getSignin',
            'as'=>'signinwindow'


        ]


    );


    Route::get('/doesnt',[
            'uses'=>'UserController@getSigninAgain',
            'as'=>'signinwindowAgain'


        ]


    );



    Route::post('/signup',[
            'uses'=>'UserController@postSignup',
            'as'=>'signup'


        ]


    );


    Route::post('/signpharm',[
            'uses'=>'PharmController@postSignuppharm',
            'as'=>'signuppharm'


        ]


    );


    Route::post('/signinpharm',[
            'uses'=>'PharmController@postSigninpharm',
            'as'=>'signinpharm'


        ]


    );


    Route::get('/logout',[

            'uses'=>'UserController@getLogout',
            'as'=>'logout'
        ]


    );


    Route::get('/plogout',[

            'uses'=>'PharmController@getLogoutP',
            'as'=>'logoutp'
        ]


    );

    Route::get('/account',[
            'uses'=>'UserController@getAccount',
            'as'=>'account'


        ]


    );



    Route::get('/patient',[
            'uses'=>'UserController@getPatAdd',
            'as'=>'patientadd'


        ]


    );



    Route::get('/pharm',[
            'uses'=>'UserController@getPharmReg',
            'as'=>'pharmreg'


        ]


    );
    
    
    


    Route::post('/patientreg',[
            'uses'=>'PatientController@getPatReg',
            'as'=>'patientreg'


        ]


    );


    Route::post('/account',[
            'uses'=>'UserController@postSaveAccount',
            'as'=>'account.save'


        ]


    );







    Route::post('/signin',[
            'uses'=>'UserController@postSignin',
            'as'=>'signin'


        ]


    );

    Route::get('/userimage/{filename}', [
        'uses' => 'UserController@getUserImage',
        'as' => 'account.image'
    ]);


    Route::get('/dashboard',[
       'uses'=>'PostController@getdashboard',
        'as'=>'dashboard',

        'middleware' => ['auth']
    ]);

 /*   Route::get('/forum',[
        'uses'=>'UserController@getpostboard',
        'as'=>'postboard'

    ]);*/

   //routes for posts go here 
    Route::post('/createpost',[
       'uses'=>'PostController@postCreatePost',
        'as'=>'post.create',
          'middleware' => ['auth']

    ]);


    Route::get('/delete-post/{post_id}',[
        'uses'=>'PostController@getDeletePost',
        'as'=>'post.delete',
        'middleware' => ['auth']



        ]);


    Route::get('/paharmdashboard',[
            'uses'=>'PharmController@getPDashboard',
            'as'=>'PDashboard',
            //'middleware' => ['auth']


        ]


    );


    Route::get('/patientdiagnosis',[
            'uses'=>'PatientController@getPDiag',
            'as'=>'PatDiag',
            'middleware' => ['auth']


        ]


    );



    Route::post('/searchpatients',[
        'uses'=>'PatientController@postPatSearch',
        'as'=>'searchpat'

    ] );

//add diagnosis for doctor
    Route::post('/adddiag',[
        'uses'=>'PatientController@postPatSymp',
        'as'=>'PatSymp'

    ] );


    Route::get('/patientsearch',[
            'uses'=>'PatientController@getPSearch',
            'as'=>'patientsearch'


        ]


    );




    Route::post('/searchpatientsph',[
        'uses'=>'PharmController@postPatSearch',
        'as'=>'searchpatpharm'

    ] );//searching the patient by pharmacist



});