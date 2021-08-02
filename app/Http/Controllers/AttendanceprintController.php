<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class AttendanceprintController extends Controller
{
    //
    public function index(){
        
        return view('attendance-print',['users'=>$users]);
        }



        public function index2(Request $request){
            //$users = DB::select('select * from candidates');
            

            $users = DB::table('candidates')
            //->join('files', 'candidates.special', '=', 'files.special')
            ->join('attendance', 'candidates.id', '=', 'attendance.id')
            ->join('batching', 'attendance.batch', '=', 'batching.batch_number')
            ->join('departments', 'departments.id', '=', 'candidates.state_of_origin')
            ->join('employees', 'candidates.lga_of_origin', '=', 'employees.id')
            
            //->join('Batching', 'Batching.batch_number', '=', 'candidates.batch')
            ->select('candidates.*', 'departments.name', 'employees.name as lga',  'attendance.*', 'batching.*')
            //->select('candidates.*', 'departments.name', 'employees.name as lga', 'files.url')
            ->where ('attendance.batch', '=', $request->batch_number)
            ->where ('attendance.hall', '=', $request->hall)
            ->where ('attendance.status', '=', 1)
            ->get();
            //return view('attendance-view',['users'=>$users, 'users2'=>$users2]);
            return view('attendance-print',['users'=>$users]);
            //return redirect('batches')->with('delete_status', 'Batch succesfully deleted');
        }

           
          
}