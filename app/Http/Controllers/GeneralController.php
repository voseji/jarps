<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class GeneralController extends Controller
{
    public function store (Request $request) {

        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                   // 'special' => 'string|max:40',
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpg,jpeg,png|max:1014',
                ]);
                $extension = $request->image->extension();
                $special = $request->input('special');
                $request->image->storeAs('/', $special.".".$extension);
                //$path = $request->file('image')->store('public/images');
                $url = ($special.".".$extension);
                
                $file = File::create([
                   'name' => $validated['name'],
                    'url' => $url,
                    'special' => $special,
                ]);
                Session::put('pp', "Passport uploaded successfully. ");
                //return \Redirect::back();
                return redirect('candidates')->with('delete_status', 'Candidate succesfully added');
            }
        }
        abort(500, 'Could not upload image :(');
    }

 
  

    
}