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
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1014',
                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('public/storage', $validated['name'].".".$extension);
                $url = Storage::url($validated['name'].".".$extension);
                $special = $request->input('special');
                $file = File::create([
                   'name' => $validated['name'],
                    'url' => $url,
                    'special' => $special,
                ]);
                Session::put('pp', "Passport uploaded successfully. ");
                //return \Redirect::back();
                return view('home');
            }
        }
        abort(500, 'Could not upload image :(');
    }

 
  

    
}