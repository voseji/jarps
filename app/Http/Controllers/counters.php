<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class counters extends Controller
{
    public function counters(){
        

$counts = DB::table('candidates')->count('id');



        return view('counters',['counter'=>$counts]);

        } 
}
