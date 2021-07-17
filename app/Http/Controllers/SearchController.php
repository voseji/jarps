<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    //
    
       
       
         
    public function check(Request $request){
        $users = DB::select('select * from candidates');
        

        $users = DB::table('candidates')
        ->select('candidates.*')->where ('candidates.id', '=', $request->reg_number)
        ->get();

        return view('candidate-passport',['users'=>$users]);
        //return back()->with(['users'=>$users]);

        } 

        
        }
