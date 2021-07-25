<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\File;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class StudInsertController extends Controller
{
    //
    public function insertform(){
        return view('new-candidate');
        
        }
       
        
         

         
        

        public function insert(Request $request){
           // $message = "Hello World!";
            //$message = $request->echo('Successful');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $othernames = $request->input('othernames');
        $email = $request->input('email');
        $date_of_birth = $request->input('date_of_birth');
        $gender = $request->input('gender');
        $marital_status = $request->input('marital_status');
        $phone_number = $request->input('phone_number');
        $alternate_phone_number = $request->input('alternate_phone_number');
        $state_of_origin = $request->input('sel_depart');
        $lga_of_origin = $request->input('sel_emp');
        $form_number = $request->input('form_number');
        $nationality = $request->input('nationality');
        $created_by = $request->input('created_by');
        $special = $request->input('special');

        $data=array('firstname'=>$firstname,"lastname"=>$lastname,"othernames"=>$othernames,"email"=>$email,"date_of_birth"=>$date_of_birth,"gender"=>$gender, "marital_status"=>$marital_status, "phone_number"=>$phone_number, "alternate_phone_number"=>$alternate_phone_number, "state_of_origin"=>$state_of_origin, "lga_of_origin"=>$lga_of_origin, "form_number"=>$form_number, "nationality"=>$nationality,"created_by"=>$created_by,"special"=>$special);
        DB::table('candidates')->insert($data);
        $users = DB::table('candidates')
        ->select('candidates.form_number')->where ('candidates.form_number', '=', $form_number)
        ->get();
        Session::put('users', $users);
        Session::put('special', $special);
        return redirect()->route('candidate-passport',['users'=>$users, 'special'=>$special]);
        
        }
        
       
       
        
         
        
          
        
            
        }