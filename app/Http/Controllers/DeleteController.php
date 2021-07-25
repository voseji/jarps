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


     public function index2() {
        $users = DB::select('select * from Batching');
        return view('batches',['batches'=>$batches]);
     }
 public function destroy2($batch_number) {
     DB::delete('delete from Batching where batch_number = ?',[$batch_number]);
     //return view('candidates',['users'=>$users]);
     return redirect('batches')->with('delete_status', 'Batch succesfully deleted');
  }
          
}