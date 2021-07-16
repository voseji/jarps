<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class EditCandidateController extends Controller
{
    //
  

    public function index3(Request $request){
        $users2 = DB::select('select * from candidates');
        

        $users2 = DB::table('candidates')
        ->join('departments', 'departments.id', '=', 'candidates.state_of_origin')
        ->join('employees', 'candidates.lga_of_origin', '=', 'employees.id')
        ->select('candidates.*', 'departments.name', 'employees.name as lga')->where ('candidates.id', '=', $request->id)
        ->get();

        return view('candidate-edit',['users2'=>$users2]);

        } 
          
}