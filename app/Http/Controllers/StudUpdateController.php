<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudUpdateController extends Controller {
public function index(){
$users = DB::select('select * from candidates');
return view('candidates',['users'=>$users]);
}

public function show($id) {
$users = DB::select('select * from candidates where id = ?',[$id]);
return view('candidate-edit',['users'=>$users]);
}

public function edit(Request $request,$id) {
$form_number = $request->input('form_number');
$id = $request->input('id');
$lastname = $request->input('lastname');
$firstname = $request->input('firstname');
$othernames = $request->input('othernames');
$email = $request->input('email');
/*$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);*/
/*DB::table('student')->update($data);*/
/* DB::table('student')->whereIn('id', $id)->update($request->all());*/

DB::update('update candidates set form_number = ?,id=?,lastname=?,firstname=?,othernames=?,email=? where id = ?',[$form_number,$id,$lastname, $firstname,$othernames,$email]);
echo "Record updated successfully.
";
echo 'Click Here to go back.';
}
}