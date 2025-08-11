<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'video_title', 'video_file', 'video_order'];

 
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}