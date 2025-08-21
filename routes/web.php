<?php

use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Models\SchoolClass;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('angi',SchoolClassController::class);
Route::resource('teacher', TeacherController::class);
Route::resource('student', StudentController::class);
Route::resource('subject', SubjectController::class);
Route::resource('enrollment', EnrollmentController::class);



