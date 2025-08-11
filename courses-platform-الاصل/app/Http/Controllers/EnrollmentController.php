<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    /**
     *
     * @param  int  $courseId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($courseId) 
    {
        $course = Course::findOrFail($courseId);

        $userId = Auth::id();

        $isEnrolled = Enrollment::where('user_id', $userId)
                                ->where('course_id', $course->id)
                                ->exists();

        if ($isEnrolled) {
            return redirect()->route('dashboard')->with('error', 'You are already enrolled in this course.');
        }

        Enrollment::create([
            'user_id' => $userId,
            'course_id' => $course->id,
        ]);

        return redirect()->route('dashboard')->with('success', 'You have successfully enrolled in ' . $course->course_name . '!');
    }
}