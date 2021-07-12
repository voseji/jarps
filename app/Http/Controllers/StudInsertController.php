<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $phone_number = $request->input('phone_number');
        $data=array('firstname'=>$firstname,"lastname"=>$lastname,"othernames"=>$othernames,"email"=>$email,"date_of_birth"=>$date_of_birth,"gender"=>$gender, "phone_number"=>$phone_number);
        DB::table('candidates')->insert($data);
        return back()->with('status', 'Candidate succeffully added');
        //return view('new-candidate');
      
           // $users = DB::select('select * from candidates where phone_no=$phone');
           //$users = DB::table('candidates')->where('phone_number', '=', $phone_number)->get();
           //$users = DB::table('candidates')->select('id')->where('phone_number', '=', $phone_number)->get();
          // return back()->with('status', 'Candidate succeffully added',['id'=>$id]);
           //return view('candidates',['id'=>$id]);
        }
        }
