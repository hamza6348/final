<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Pharm;
use App\Diag;
use Illuminate\Support\Facades\Auth;



class PharmController extends Controller{


public function postSignuppharm(Request $request){

    $name=$request['name'];
    $cnic=$request['cnic'];
    $email=$request['email'];
    $username=$request['username'];
    $password=bcrypt($request['password']);
    $pahrm=new Pharm;
    $pahrm->name=$name;
    $pahrm->cnic=$cnic;
    $pahrm->email=$email;
    $pahrm->username=$username;//s
    $pahrm->password=$password;//s

    $pahrm->save();

    Auth::login($pahrm);
    return redirect()->route('PDashboard');
    
    
}


    public function postSigninpharm(Request $request){


        if(Auth::attempt(['username'=>$request['username'],'password'=>$request['password']]      )){
            return redirect()->route('PDashboard');
        }
        return redirect()->back();
    }


     //returning pharmicist dashboard
      public function getPDashboard(){


          return view('pharmdashboard');
      }



    public function getLogoutP(){
        Auth::logout();
        return redirect()->route('pharmreg');



    }


    public function postPatSearch(Request $request){

        $username=$request['username'];
        $message='Patientfound';

        $user=Diag::where('username','=',$username)->get();
        // $user = Diag::table('diags')->where('username',$username)->get();
        if($user->count()>0){

            return view('searchresult2', [
                'message' => $message,
                'users' => $user

            ]);

        }



        return view('searchresult2', [
            'users' => $user,
            'message'=>'Patient Not Found'

        ]);










    }


}