<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Patient;
use App\Diag;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Query\Builder;


class PatientController extends Controller{



    public function getPatReg(Request $request){

        $name=$request['name'];
        $username=$request['username'];
        $cnic=$request['cnic'];

        $patient=new Patient;
        $patient->name=$name;
        $patient->username=$username;
        $patient->cnic=$cnic;

       //$user=Patient::where('username','=',$username)->get();
        
        $request->user()->patients()->save($patient);
        //return redirect()->route('PatDiag');

      

        return view('diagnosis',[
            'name'=>$name,
            'username'=>$username
            
            
        ]);



    }


    public function getPDiag(){

        return view('diagnosis',[

            'name'=>'Name',
            'username'=>'Username'
        ]);

    }
    
    
    
    public function postPatSymp(Request $request){
        $name=$request['name'];
        $username=$request['username'];

        $gender=$request['gender'];
        if($gender=='item1'){
            $gender='male';
        }

        else{

            $gender='female';
        }
        $age=$request['age'];

        $date=$request['date'];
        $symptom1=$request['symp1'];
        $symptom2=$request['symp2'];
        $symptom3=$request['symp3'];

        $symptom4=$request['symp4'];
        $remarks=$request['remarks'];
        //$pres=$request['prescription'];
        $user = Patient::where('username',$username)->first();

        $id=$user->id;
        //$id=3;
        $diag=new Diag;
        $diag->name=$name;
        $diag->remarks=$remarks;
        $diag->username=$username;
        $diag->gender=$gender;
        $diag->age=$age;
        $diag->date=$date;
        $diag->symptom3=$symptom3;
        $diag->symptom1=$symptom1;
        $diag->symptom2=$symptom2;
        $diag->symptom4=$symptom4;
        //$diag->prescription=$pres;




        $diag->patient_id=$id;

        $request->user()->diags()->save($diag);
        return redirect()->route('PatDiag');





        
        
    }
    
    
    public function postPatSearch(Request $request){
        
        $username=$request['username'];
        $message='Patientfound';

        $user=Diag::where('username','=',$username)->get();
       // $user = Diag::table('diags')->where('username',$username)->get();
        if($user->count()>0){

            return view('searchresult', [
                'message' => $message,
                  'users' => $user

            ]);

        }



            return view('searchresult', [
                'users' => $user,
                'message'=>'Patient Not Found'

            ]);










    }


    public function getPSearch(){

        return view('searchpatientpharm');

    }



}