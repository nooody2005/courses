<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class MyController extends Controller
{
    //
public function home(){
    return view('homee');
}

public function create(){
    return view('create_user_view');
}


public function store( Request $request){


$data=$request->validate([

'email'=>['required','unique:users,email'],
'name'=>['required'],
'username'=>['required','unique:users,username'],


'phone'=>['nullable','regex:/^(010|012|011|015)[0-9]{8}$/'],
'image'=>['file'],
'password'=>['required','min:6']

]);
$data['password']=Hash::make($request->password);


if ($request->hasFile('image')) {
    $file = $request->file('image');
    $filename = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('uploads'), $filename);
    $data['image'] = 'uploads/' . $filename;
}
User::create($data);
return redirect()->back()->with('msg','added succ.');




}





}
