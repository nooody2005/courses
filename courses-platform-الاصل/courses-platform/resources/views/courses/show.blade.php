@extends('layouts.app')

@section('title', $course->course_name)

@section('content')
<div class="course_container">
    <div class="video-section">
        <div class="video-player-wrapper">
            @if($videos->isNotEmpty())
            <video id="courseVideo" controls controlsList="nodownload">
                <source id="videoSource" src="{{ asset('videos/' . $videos->first()->video_file) }}" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
            @else
            <p>no video no show</p> 
            @endif
        </div>
        <div class="tabs">
            <nav class="tabs-nav">
                <a href="#" class="active">Overview</a>
                <a href="#">Notes</a>
            </nav>
        </div>
        <div class="course-info">
            <h1>{{ $course->course_name }}</h1>

            <div class="stats">
                <div class="rating"><span class="score">4.4</span><i class="fas fa-star"></i></div>
                <span class="ratings-count">(23 ratings)</span>
                <div class="students"><span class="students-count">406</span> Students</div>
                <div class="duration"><span class="duration-time">33 mins</span> Total</div>
            </div>
            <div class="meta-info">
                <div><i class="fas fa-clock"></i><span>Last updated October 2023</span></div>
            </div>
            <p>Languages: Arabic</p>
        </div>
    </div>

    {{-- Playlist Sidebar --}}
    <div class="sidebar">
        <h2>Course content</h2>
        <div class="section">
            <ul class="playlist-list">
                @forelse ($videos as $video)
                <li>
                    <a href="#" onclick="changeVideo('{{ asset('videos/' . $video->video_file) }}')">
                        {{ $video->video_order }}. {{ $video->video_title }}
                    </a>
                </li>
                @empty
                <li>
                    <p>No videos uploaded for this course yet.</p>
                </li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function changeVideo(src) {
        const video = document.getElementById("courseVideo");
        if (video) {
            const source = document.getElementById("videoSource");
            source.src = src;
            video.load();
            video.play();
        }
    }
</script>
@endsection