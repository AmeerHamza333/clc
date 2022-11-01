<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FoundationController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CommencementController;
use App\Http\Controllers\StudentapplicationController;
use App\Http\Controllers\StudentCoursesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */



// ...........................................................

// Student courses get route
Route::get('/student-course', [StudentCoursesController::class, 'studentCourses']);

Route::get('/student/showform/{id}', [StudentCoursesController::class, 'studentEnroll']);


Route::get('/student/fee', [StudentCoursesController::class, 'studentFee']);

// ...........................................................

Route::get('/', function () {
    return view('auth.login');
})->middleware(['guest']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/userlist', function () {
    // dd(auth()->user()->roleid==3);
    return view('userlist');
})->middleware(['auth', 'verified', 'admin']);

Route::middleware(['auth', 'verified', 'student'])->prefix('student')->name('student.')->group(function () {
    Route::get('/showform', [StudentapplicationController::class, 'index'])->name('viewform');
    Route::post('/storeform', [StudentapplicationController::class, 'storeApplicationForm'])->name('storeform');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/applications', [ApplicationController::class, 'index'])->name('applications');
    Route::GET('/applicationview/{id}', [ApplicationController::class, 'editit'])->name('applicationview');
    Route::GET('/applicationvapprove/{id}', [ApplicationController::class, 'approve'])->name('applications-approve');
    Route::GET('/applicationreject/{id}', [ApplicationController::class, 'reject'])->name('applications-reject');
    Route::GET('/applicationrrvision/{id}', [ApplicationController::class, 'revision'])->name('applications-revision');
    Route::GET('/applicationpending/{id}', [ApplicationController::class, 'pending'])->name('applications-pending');

    // sqr
    Route::POST('/application/status/{id}', [ApplicationController::class, 'statusChange'])->name('applications-pending');
    // sqr

    Route::resource('/courses', CourseController::class);
    Route::resource('foundationcourse', FoundationController::class);
    Route::resource('commencement', CommencementController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('users', UserController::class);
    // Route::get('/downloadPDF',[ApplicationController::class,'downloadPdf'])->name('downloadPDF');
});
Route::middleware(['auth', 'verified', 'admin'])->name('admin.')->prefix('admin')->group(function () {

});

require __DIR__ . '/auth.php';
