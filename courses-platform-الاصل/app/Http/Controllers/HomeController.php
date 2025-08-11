<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class HomeController extends Controller
{
 
    public function index()
    {
        $courses = Course::all();
        return view('index', ['courses' => $courses]);
    }

   
    public function main()
    {
        $courses = Course::all(); 

        $enrolledCourseIds = Auth::user()->enrolledCourses->pluck('id')->toArray();

        return view('main', [
            'courses' => $courses,
            'enrolledCourseIds' => $enrolledCourseIds
        ]);
    }
}