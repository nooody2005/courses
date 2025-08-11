<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin_dash(){
        return view('admin_dash');
    }
    

  public function user_action_view()
{
    // جلب ID المستخدم الحالي
    $currentUserId = Auth::user()->id;

    // جلب كل الأدمن ماعدا المستخدم الحالي
    $users = User::where('role', 'admin')
                 ->where('id', '!=', $currentUserId)
                 ->get();

    return view('user_action', compact('users'));
}



}
