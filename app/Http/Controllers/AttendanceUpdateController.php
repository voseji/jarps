<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class AttendanceUpdateController extends Controller {
public function index(){
$users = DB::select('select * from student');
return view('stud_edit_view',['users'=>$users]);
}

public function update2(Request $request) {
$status = $request->input('status');
$id = $request->input('id');
//$city_name = $request->input('city_name');
//$email = $request->input('email');
/*$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);*/
/*DB::table('student')->update($data);*/
/* DB::table('student')->whereIn('id', $id)->update($request->all());*/
DB::update('update attendance set status = ?',[$status])
->where (id, '=', $id);
echo "Record updated successfully.
";
echo 'Click Here to go back.';
}
}