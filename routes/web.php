<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\MembershipPlanController;
use App\Http\Controllers\WorkoutController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('members', MemberController::class);
Route::resource('trainers', TrainerController::class);
Route::resource('membership-plans', MembershipPlanController::class);
Route::resource('workouts', WorkoutController::class);

