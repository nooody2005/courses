<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyLearningController extends Controller
{
   
    public function index()
    {
        $user = Auth::user();

        $enrolledCourses = $user->enrolledCourses;

        return view('my-learning', ['courses' => $enrolledCourses]);
    }
}