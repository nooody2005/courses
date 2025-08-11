<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\MyLearningController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SettingsController;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('admin_dash', [AdminController::class, 'admin_dash'])->name('admin_dash');
Route::get('user_action_view',[AdminController::class,'user_action_view'])->name('user_action_view');


// --- Authenticated User Routes ---
Route::middleware('auth')->group(function () {

    // General User Routes
    Route::get('/dashboard', [HomeController::class, 'main'])->name('dashboard');
    Route::get('/my-learning', [MyLearningController::class, 'index'])->name('my-learning');

    // Course & Enrollment Routes
    Route::get('/enroll/{course}', [EnrollmentController::class, 'store'])->name('enroll');
    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

    // Default Profile Routes (from Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Custom Settings Page Routes
    Route::get('/account/settings', [SettingsController::class, 'edit'])->name('account.settings');
    Route::post('/account/settings', [SettingsController::class, 'update'])->name('account.update');
});






// Route::middleware(['auth', 'role:admin','prevent-back-history'])->group(function () {

// Route::get('admin_dash',[AdminController::class,'admin_dash'])->name('admin_dash');

// Route::get('user_action_view',[AdminController::class,'user_action_view'])->name('user_action_view');



// });




// --- Authentication Routes (Login, Register, etc.) ---
require __DIR__ . '/auth.php';
