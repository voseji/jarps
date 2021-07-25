<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class BatchController extends Controller
{
    //
    public function index(){
        $batches = DB::select('select * from Batching');
        return view('batches',['batches'=>$batches]);
        }

       

           
          
}