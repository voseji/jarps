<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class DeleteController extends Controller
{
    //
  
   
        public function index() {
           $users = DB::select('select * from candidates');
           return view('candidates',['users'=>$users]);
        }
    public function destroy($id) {
        DB::delete('delete from candidates where id = ?',[$id]);
        //return view('candidates',['users'=>$users]);
        return redirect('candidates')->with('delete_status', 'Candidate succesfully deleted');
     }
          
}