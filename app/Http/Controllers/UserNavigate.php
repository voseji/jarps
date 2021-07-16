<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNavigate extends Controller
{
    public function special($id){
        echo $id;
    }
}
