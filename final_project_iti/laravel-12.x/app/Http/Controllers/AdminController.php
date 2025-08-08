<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

public function add_user(){
    return view('add_user');
}

public function add_course(){
    return view('add_course');
}



public function edit_user(){
    return view('update_user');
}


public function useraction(){
    $users = User::with('course')->get();


    return view('user_action', compact('users'));
}


public function courseaction(){
    return view('course_action');
}

public function index(){

return view('admin_dashboard');

}



public function show($id){

$student=User::findorfail($id);
$course=Course::all();
return view('show',compact('student','course'));

}



public function destroy($id){

    $student=User::findorfail($id);
    $student->delete();

return redirect()->back()->with('msg','deleted succ.');


}

public function edit($id){

$student=User::findorfail($id);
$courses=Course::all();

return view('edit',compact('student','courses'));


}


public function update($id, Request $request) {
    $student = User::findOrFail($id);

    $data = $request->validate([
        'email'     => ['required', 'email', 'unique:students,email,' . $student->id],
        'name'      => ['required'],
        'username'      => ['required'],
        'image'      => ['required'],
        'phone'     => ['nullable', 'regex:/^(010|012|011|015)[0-9]{8}$/'],
        'courses_id' => ['required','exists:courses,id'],
    ]);


    $student->update($data);

    return redirect()->back()->with('msg', 'Updated successfully.');
}



}
