<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Learning Journey</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="center-mylearning">
        <div class="container" style="padding-top: 2rem; padding-bottom: 2rem;">
            <h1 class="section-title">My Learning Journey</h1>
            <p class="section-description">Courses you are currently enrolled in.</p>

            <div class="courses-grid" style="margin-top: 2rem;">
                @forelse ($courses as $course)
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('image/' . $course->image) }}" alt="{{ $course->course_name }}">
                    </div>
                    <div class="course-content">
                        <h3 class="course-title">{{ $course->course_name }}</h3>
                        <p>{{ $course->description }}</p>
                        <a href="{{ route('courses.show', $course) }}" class="enroll">Continue Learning</a>
                    </div>
                </div>
                @empty
                <div class="no-courses-message">
                    <p>You have not enrolled in any courses yet.</p>
                    <a href="{{ route('home') }}" class="cta-button">Discover Courses</a>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</body>

</html>