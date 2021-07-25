<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class AttendanceController extends Controller
{
    //
    public function index(){
        
        return view('attendance-view',['users'=>$users]);
        }



        public function index2(Request $request){
            //$users = DB::select('select * from candidates');
            

            $users = DB::table('candidates')
            ->join('departments', 'departments.id', '=', 'candidates.state_of_origin')
            ->join('employees', 'candidates.lga_of_origin', '=', 'employees.id')
            ->join('files', 'candidates.special', '=', 'files.special')
            //->join('Batching', 'Batching.batch_number', '=', 'candidates.batch')
            ->select('candidates.*', 'departments.name', 'employees.name as lga', 'files.url')
            //->select('candidates.*', 'departments.name', 'employees.name as lga', 'files.url')
            ->where ('candidates.id', '=', $request->id)
            ->get();
            //return view('attendance-view',['users'=>$users, 'users2'=>$users2]);
            return view('attendance-view',['users'=>$users]);
        }

           
          
}