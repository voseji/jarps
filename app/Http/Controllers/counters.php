<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class counters extends Controller
{
    public function counters(){
        $users2 = DB::select('select * from candidates');
        

        $users2 = DB::table('candidates')
        ->join('departments', 'departments.id', '=', 'candidates.state_of_origin')
        ->join('employees', 'candidates.lga_of_origin', '=', 'employees.id')
        ->select('candidates.*', 'departments.name', 'employees.name as lga')->where ('candidates.id', '=', $request->id)
        ->get();

        return view('candidate-edit',['users2'=>$users2]);

        } 
}
