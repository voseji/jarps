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

class BatchCreatorController extends Controller
{
    //
    

        public function insert(Request  $request)
        {

        
           // $message = "Hello World!";
            //$message = $request->echo('Successful');
        $batch_number = $request->input('batch_number');
        $batch_date = $request->input('batch_date');
        $batch_time = $request->input('batch_time');
        $seats_available = $request->input('seats_available');
        $hall = $request->input('hall');
        $created_by = $request->input('created_by');
        $created_at = $request->input('created_at');
        //$password_confirmation = $request->input('password_confirmation');
        
       

        $data=array('batch_number'=>$batch_number,"batch_date"=>$batch_date,"batch_time"=>$batch_time,"seats_available"=>$seats_available,"hall"=>$hall,"created_by"=>$created_by,"created_at"=>$created_at);
        DB::table('Batching')->insert($data);
        
        return redirect('batches')->with('delete_status', 'New Batch succesfully created');
        //return redirect()->route('new-user');
       
        }
       
       
       
        
         
        
          
        
            
        }