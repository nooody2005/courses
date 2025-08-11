<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['course_name', 'description', 'image'];

  
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

   
    public function users()
    {
        return $this->belongsToMany(User::class, 'enrollments', 'course_id', 'user_id');
    }
}