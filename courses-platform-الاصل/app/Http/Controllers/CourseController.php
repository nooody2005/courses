<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
   
    public function show(Course $course)
    {
        $isEnrolled = Auth::user()->enrolledCourses()->where('course_id', $course->id)->exists();

        if (!$isEnrolled) {
            abort(403, 'ACCESS DENIED: YOU ARE NOT ENROLLED IN THIS COURSE.');
        }

        $videos = $course->videos()->orderBy('video_order')->get();

        return view('courses.show', [
            'course' => $course,
            'videos' => $videos
        ]);
    }


    public function course_action_view()
    {
    

        return view('course_action', compact('courses'));
    }
}