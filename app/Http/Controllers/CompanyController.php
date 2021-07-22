<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
class CompanyController extends Controller
{
    //
  
   
    public function destroy($id){

        $cnadidates = candidates::find($id);
        $candidates->delete();
        return response()->json([
          'message' => 'Data deleted successfully!'
        ]);
  
  }
          
}