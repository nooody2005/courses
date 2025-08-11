<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'course_name' => 'HTML Course',
                'description' => 'Discover the structure of the web. Join this class to build your foundation with HTML.',
                'image' => 'html.jpg', // <--- تم التعديل إلى jpg
            ],
            [
                'course_name' => 'CSS Course',
                'description' => 'Learn how to style beautiful, responsive websites by joining this class and CSS.',
                'image' => 'css.jpg', // <--- تم التعديل إلى jpg
            ],
            [
                'course_name' => 'PHP Course',
                'description' => 'Learn how to build powerful server-side applications by joining our PHP course today.',
                'image' => 'php.jpg', // <--- تم التعديل إلى jpg
            ],
            [
                'course_name' => 'Laravel Course',
                'description' => 'Master modern PHP development with Laravel. Join this class to level up your skills.',
                'image' => 'laravel.jpg', // <--- تم التعديل إلى jpg
            ],
        ]);
    }
}