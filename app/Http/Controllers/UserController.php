<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;


class UserController extends Controller{


   /* public function getpostboard(){
        return view('');
    }

*/

    public function postSignup(Request $request){

       $this->validate($request,[


           'email'=>'unique:users'

       ]);


        $name=$request['name'];
        $cnic=$request['cnic'];
        $email=$request['email'];
        $username=$request['username'];
        $password=bcrypt($request['password']);

       /* $country=$request['country'];
        $city=$request['city'];
        $adress=$request['adress'];
        $pmdc=$request['pmdc'];
        $gradcollege=$request['gradcollege'];
        $interest=$request['interest'];
       */



        $user=new User;
        $user->name=$name;
        $user->cnic=$cnic;
        $user->email=$email;
        $user->username=$username;
        $user->password=$password;

        $user->country='fff';
        $user->city='aaa';
        $user->adress='zzz';
        $user->pmdc='ccc';
        $user->gradcollege='vvv';
        $user->interest='bbb';
        $user->year='2006';

        $user->save();

        Auth::login($user);
        return redirect()->route('dashboard');



    }

//accountupdate
    public function postSaveAccount(Request $request){
        //updateform validation goes here
        
        //
        $user=Auth::user();
        $user->name=$request['name'];

        $user->country=$request['country'];
        $user->city=$request['city'];
        $user->adress=$request['adress'];
        $user->pmdc=$request['pmdc'];
        $user->gradcollege=$request['gradcollege'];
        $user->interest=$request['interest'];
        $user->year=$request['year'];

        $user->update();
        
        $file=$request->file('image');

        $filename=$request['name'].'-'.$user->id.'.jpg';
        if($file){

            Storage::disk('local')->put($filename,File::get($file));
        }
        return redirect()->route('account');


    }


    public function postSignIn(Request $request){
        if(Auth::attempt(['username'=>$request['username'],'password'=>$request['password']]      )){
            return redirect()->route('dashboard');
        }
        return redirect()->route('signinwindowAgain');



    }


    public function getLogout(){
        Auth::logout();
        return redirect()->route('home');



    }

    public function getSignin(){

        return view('welcome');
    }


    public function getAccount(){

        return view('account',['user'=>Auth::user()]);
    }


    public function getUserImage($filename){
        $file=Storage::disk('local')->get($filename);
        return new Response($file,200);



    }
    
    public function getPatAdd(){
        return view('patient');
        
        
        
        
    }

//patientreg
    public function getPatReg(Request $request){

        $name=$request['name'];
        $username=$request['username'];
        $cnic=$request['cnic'];

        $patient=new Patient;
        $patient->name=$name;
        $patient->username=$username;
        $patient->cnic=$cnic;
        $request->users()->patients()->save($patient);
        return redirect()->route('patientadd');



    }
    
    
    
    
    public function getPharmReg(){
        
        return view('pharm');
        
        
        
        
    }


public function getSigninAgain(){

    return view('usernamenotexists');
    
    
    
    
}

}