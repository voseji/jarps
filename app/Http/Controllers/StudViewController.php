<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class StudViewController extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from candidates');
        return view('candidates',['users'=>$users]);
        }

        public function index2(){
            $users = DB::select('select * from candidates');
            

            $users = DB::table('candidates')
            ->join('departments', 'departments.id', '=', 'candidates.state_of_origin')
            ->join('employees', 'candidates.lga_of_origin', '=', 'employees.id')
            ->select('candidates.*', 'departments.name', 'employees.name as lga')
            ->get();

            return view('candidate-view',['users'=>$users]);

            } 

          
}