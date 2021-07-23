<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Hash;
use App\Models\File;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    

        public function insert(Request  $request)
        {

        
           // $message = "Hello World!";
            //$message = $request->echo('Successful');
        $name = $request->input('name');
        $email = $request->input('email');
        $role = $request->input('role');
        $password = Hash::make($request->password);
        $created_at = $request->input('created_at');
        //$password_confirmation = $request->input('password_confirmation');
        
       

        $data=array('name'=>$name,"email"=>$email,"role"=>$role,"password"=>$password,"created_at"=>$created_at,"updated_at"=>$created_at);
        DB::table('users')->insert($data);
        
        return redirect('new-user')->with('delete_status', 'New User succesfully added');
        //return redirect()->route('new-user');
       
        }
       
       
       
        
         
        
          
        
            
        }