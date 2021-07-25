<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class BatchController extends Controller
{
    //
    public function index(){
        $batches = DB::select('select * from Batching');
        return view('batches',['batches'=>$batches]);
        }

       

        public function index2(){
            
            $users = DB::table('Batching')
            ->join('candidates', 'candidates.batch', '=', 'Batching.batch_number')
            ->select('candidates.*', 'Batching.*')
            ->get();
            return view('edit-batch',['users'=>$users]);
            }     
            
            public  function updateData(Request $request)
            {
                $batch_number = $request->input('batch_number');
                $batches = DB::select('select batch_number from Batching')
                //Batching::find($batch_number)->update(['batch_number' => $batch_number]);
                //DB::table('Batching')
                 // ->where('batch_number', '=', $batch_number)
                  ->update(['batch_number' =>$batch_number]);
                  return redirect('batches')->with('delete_status', 'Batch succesfully edited');
              }
          
}