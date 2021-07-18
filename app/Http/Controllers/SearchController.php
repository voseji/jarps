<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class SearchController extends Controller
{
    //
    
    
       
         
    public function check(Request $request){
        
        

        $users = DB::table('candidates')
        ->select('candidates.form_number')->where ('candidates.form_number', '=', $request->reg_number)
        ->get();
       // $lga_of_origin = $request->input('sel_emp');
        Session::put('users', $users);
        //Session::flash('users', $users);
        //return redirect('/candidate-passport')->with('users'->$users);
        //return view('candidate-edit',['users2'=>$users2]);
        //return view('/candidate-passport',['users'=>$users]);
        return redirect()->route('candidate-passport',['users'=>$users]);
        //return back()->with(['users'=>$users]);

        } 

        public function check2(){
            return view('candidate-passport');
            
            }   
        
        }
