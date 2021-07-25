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

        public function index2(Request $request){
            //$users = DB::select('select * from candidates');
            

            $users = DB::table('candidates')
            ->join('departments', 'departments.id', '=', 'candidates.state_of_origin')
            ->join('employees', 'candidates.lga_of_origin', '=', 'employees.id')
            ->select('candidates.*', 'departments.name', 'employees.name as lga')
            ->where ('candidates.id', '=', $request->id)
            ->get();
            $users2 = DB::table('files')
            ->select('files.special', 'files.name', 'files.url')->where ('files.special', '=', $request->special)
            ->get();

            return view('candidate-view',['users'=>$users, 'users2'=>$users2]);

            } 


            public function index3(Request $request){
                //$users = DB::select('select * from candidates');
                
    
                $users = DB::table('candidates')
                ->join('departments', 'departments.id', '=', 'candidates.state_of_origin')
                ->join('employees', 'candidates.lga_of_origin', '=', 'employees.id')
                ->select('candidates.*', 'departments.name', 'employees.name as lga')
                ->where ('candidates.id', '=', $request->id)
                ->get();
                $users2 = DB::table('files')
                ->select('files.special', 'files.name', 'files.url')->where ('files.special', '=', $request->special)
                ->get();
    
                return view('print-all-slips',['users'=>$users, 'users2'=>$users2]);
    
                } 
           
          
}