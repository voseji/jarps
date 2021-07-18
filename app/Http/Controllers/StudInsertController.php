<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\File;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class StudInsertController extends Controller
{
    //
    public function insertform(){
        return view('new-candidate');
        
        }
       
        
         

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
                        $file = File::create([
                           'name' => $validated['name'],
                            'url' => $url,
                        ]);
                        Session::flash('success', "Passport uploaded successfully. ");
                        //return \Redirect::back();
                        //return back()->with('status', 'Candidate succeffully added');
                    }
                }
                abort(500, 'Could not upload image :(');
            }
        

        public function insert(Request $request){
           // $message = "Hello World!";
            //$message = $request->echo('Successful');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $othernames = $request->input('othernames');
        $email = $request->input('email');
        $date_of_birth = $request->input('date_of_birth');
        $gender = $request->input('gender');
        $marital_status = $request->input('marital_status');
        $phone_number = $request->input('phone_number');
        $alternate_phone_number = $request->input('alternate_phone_number');
        $state_of_origin = $request->input('sel_depart');
        $lga_of_origin = $request->input('sel_emp');
        $form_number = $request->input('form_number');
        $nationality = $request->input('nationality');
        $created_by = $request->input('created_by');

        $data=array('firstname'=>$firstname,"lastname"=>$lastname,"othernames"=>$othernames,"email"=>$email,"date_of_birth"=>$date_of_birth,"gender"=>$gender, "marital_status"=>$marital_status, "phone_number"=>$phone_number, "alternate_phone_number"=>$alternate_phone_number, "state_of_origin"=>$state_of_origin, "lga_of_origin"=>$lga_of_origin, "form_number"=>$form_number, "nationality"=>$nationality,"created_by"=>$created_by);
        DB::table('candidates')->insert($data);
        return back()->with('status', 'Candidate successfully added');
        //return redirect()->route('candidate-passport')->with('status', 'Candidate succeffully added');
        //return view('candidate-passport')->with('status', 'Candidate succeffully added');
        //return view('candidate-passport');
      
           // $users = DB::select('select * from candidates where phone_no=$phone');
           //$users = DB::table('candidates')->where('phone_number', '=', $phone_number)->get();
           //$users = DB::table('candidates')->select('id')->where('phone_number', '=', $phone_number)->get();
          // return back()->with('status', 'Candidate succeffully added',['id'=>$id]);
           //return view('candidates',['id'=>$id]);
        }
        
       
        
        
         
        
          
        
            
        }