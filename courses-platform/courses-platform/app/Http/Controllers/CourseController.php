<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{


    public function courses_list()
{
    $courses = Course::withCount('videos')->get();
    return view('index', compact('courses'));
}


    public function courses_action_view()
    {
        $courses = Course::with('videos')->get();
        return view('courses.courses_action_view', compact('courses'));
    }

   
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


    
    // // عرض تفاصيل كورس + الفيديوهات
    public function showAll(Course $course)
    {
        $videos = $course->videos()->orderBy('video_order')->get();
        return view('courses.show', compact('course', 'videos'));
    }



    // عرض جميع الكورسات
    public function index()
    {
        $courses = Course::withCount('videos')->get();
        return view('courses.index', compact('courses'));
    }

//================================================================================================================
     // عرض فورم إضافة كورس جديد
    public function add_course()
    {
        return view('courses.add_course');
    }

//=========================================================================

public function store(Request $request)
{
    // تحقق البيانات الأساسية
    $request->validate([
        'course_name' => 'required|string|max:255',
        'course_image' => 'required|image|max:2048',
        'description' => 'required|string',
        'videos.*.video_title' => 'required|string|max:255',
        'videos.*.video_file' => 'required|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:20000',
    ]);

    // حفظ صورة الكورس في public/image
    $imageName = time() . '_' . uniqid() . '.' . $request->course_image->extension();
    $request->course_image->move(public_path('image'), $imageName);

    // إنشاء الكورس مع اسم الصورة فقط
    $course = Course::create([
        'course_name' => $request->course_name,
        'image' => $imageName, // فقط اسم الملف
        'description' => $request->description,
    ]);

    // حفظ الفيديوهات المرتبطة بالكورس
    if ($request->has('videos')) {
        foreach ($request->videos as $videoData) {
            if (isset($videoData['video_file'])) {
                // حفظ الفيديو في public/videos
                $videoName = time() . '_' . uniqid() . '.' . $videoData['video_file']->extension();
                $videoData['video_file']->move(public_path('videos'), $videoName);

                // إنشاء سجل فيديو مرتبط بالكورس
                $course->videos()->create([
                    'video_title' => $videoData['video_title'],
                    'video_file' => $videoName, // فقط اسم الملف
                ]);
            }
        }
    }

    
    
     return redirect()->route('courses_action_view')->with('success', 'Added successfully');
}






//=====================================================================================================================================================================

public function Edit_course(Course $course)
{
    // ترجع صفحة تعديل الكورس مع بيانات الكورس والفيديوهات المرتبطة به
    $course->load('videos'); // لتحميل الفيديوهات مع الكورس لتسهيل العرض
    return view('courses.Edit_course', compact('course'));
}



//======================
     
public function update(Request $request, Course $course)
{
    $request->validate([
        'course_name' => 'required|string|max:255',
        'course_image' => 'nullable|image|max:2048',
        'description' => 'required|string',
        'existing_videos.*.video_title' => 'required|string|max:255',
        'existing_videos.*.video_file' => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:20000',
        'videos.*.video_title' => 'required_with:videos.*.video_file|string|max:255',
        'videos.*.video_file' => 'required_with:videos.*.video_title|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:20000',
    ]);

    // تحديث بيانات الكورس الأساسية
    $course->course_name = $request->course_name;
    $course->description = $request->description;

    // تعديل الصورة إذا تم رفع صورة جديدة
    if ($request->hasFile('course_image')) {
        // حذف الصورة القديمة لو موجودة
        if ($course->image && file_exists(public_path('image/' . $course->image))) {
            unlink(public_path('image/' . $course->image));
        }
        $imageName = time() . '_' . uniqid() . '.' . $request->course_image->extension();
        $request->course_image->move(public_path('image'), $imageName);
        $course->image = $imageName;
    }

    $course->save();

    // تحديث الفيديوهات الموجودة
    if ($request->has('existing_videos')) {
        foreach ($request->existing_videos as $videoId => $videoData) {
            $video = $course->videos()->find($videoId);
            if ($video) {
                $video->video_title = $videoData['video_title'];

                if (isset($videoData['video_file']) && $videoData['video_file'] instanceof \Illuminate\Http\UploadedFile) {
                    // حذف الفيديو القديم
                    if ($video->video_file && file_exists(public_path('videos/' . $video->video_file))) {
                        unlink(public_path('videos/' . $video->video_file));
                    }
                    // حفظ الفيديو الجديد
                    $videoName = time() . '_' . uniqid() . '.' . $videoData['video_file']->extension();
                    $videoData['video_file']->move(public_path('videos'), $videoName);
                    $video->video_file = $videoName;
                }
                $video->save();
            }
        }
    }

    // إضافة فيديوهات جديدة إذا تم رفعها
    if ($request->has('videos')) {
        foreach ($request->videos as $videoData) {
            if (isset($videoData['video_file'])) {
                $videoName = time() . '_' . uniqid() . '.' . $videoData['video_file']->extension();
                $videoData['video_file']->move(public_path('videos'), $videoName);

                $course->videos()->create([
                    'video_title' => $videoData['video_title'],
                    'video_file' => $videoName,
                ]);
            }
        }
    }
// $courses = Course::with('videos')->get();

    // إعادة التوجيه إلى نفس الصفحة مع رسالة نجاح
    return redirect()->route('courses_action_view')->with('success', 'updated successfully :)');
}






//===============================================================================================================================================================================

public function destroy(Course $course)
{
    // حذف صورة الكورس من public/image
    if ($course->image && file_exists(public_path('image/' . $course->image))) {
        unlink(public_path('image/' . $course->image));
    }

    // حذف الفيديوهات المرتبطة
    foreach ($course->videos as $video) {
        if ($video->video_file && file_exists(public_path('videos/' . $video->video_file))) {
            unlink(public_path('videos/' . $video->video_file));
        }
    }

    // حذف الكورس من قاعدة البيانات
    $course->delete();

    // إعادة جلب جميع الكورسات للعرض
    $courses = Course::with('videos')->get();

    // إعادة التوجيه إلى نفس الصفحة مع رسالة نجاح
    return redirect()->route('courses_action_view')->with('success', 'deleted successfully :)');
}


    
}
