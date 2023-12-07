<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PublicController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[PublicController::class, 'home']);
Route::get('login',[AuthController::class, 'login']);
Route::post('login',[AuthController::class, 'AuthLogin']);
Route::get('logout',[AuthController::class, 'logout']);
Route::get('forgot-password',[AuthController::class, 'forgotpassword']);
Route::post('forgot-password',[AuthController::class, 'PostForgotPassword']);
Route::get('reset/{token}',[AuthController::class, 'reset']);
Route::post('reset/{token}',[AuthController::class, 'PostReset']);
Route::get('create-akun',[AuthController::class, 'createakun']);
Route::post('create-akun',[AuthController::class, 'insert']);


Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

//Route::get('admin/admin/list', function () {
//    return view('admin.admin.list');
//});


Route::group(['middleware' => 'admin'], function (){
    Route::get('admin/dashboard',[DashboardController::class, 'dashboard']);
    Route::get('admin/admin/list',[AdminController::class, 'list']);
    Route::get('admin/admin/add',[AdminController::class, 'add']);
    Route::post('admin/admin/add',[AdminController::class, 'insert']);
    Route::get('admin/admin/edit/{id}',[AdminController::class, 'edit']);
    Route::post('admin/admin/edit/{id}',[AdminController::class, 'update']);
    Route::get('admin/admin/delete/{id}',[AdminController::class, 'delete']);

    //content url

    Route::get('admin/content/list',[ContentController::class, 'list']);
    Route::get('admin/content/add',[ContentController::class, 'add']);
    Route::post('admin/content/add',[ContentController::class, 'insert']);
    Route::get('admin/content/edit/{id}',[ContentController::class, 'edit']);
    Route::post('admin/content/edit/{id}',[ContentController::class, 'update']);
    Route::get('admin/content/delete/{id}',[ContentController::class, 'delete']);

    //change password url
    Route::get('admin/change_password',[UserController::class, 'change_password']);
    Route::post('admin/change_password',[UserController::class, 'update_change_password']);

    //course url


    Route::get('admin/course/list',[CourseController::class, 'list']);
    Route::get('admin/course/add',[CourseController::class, 'add']);
    Route::post('admin/course/add',[CourseController::class, 'insert']);
    Route::get('admin/course/edit/{id}',[CourseController::class, 'edit']);
    Route::post('admin/course/edit/{id}',[CourseController::class, 'update']);
    Route::get('admin/course/delete/{id}',[CourseController::class, 'delete']);
});

Route::group(['middleware' => 'teacher'], function (){
    Route::get('teacher/dashboard',[DashboardController::class, 'dashboard']);

    Route::get('teacher/content/list',[ContentController::class, 'list']);
    Route::get('teacher/content/add',[ContentController::class, 'add']);
    Route::post('teacher/content/add',[ContentController::class, 'insert']);
    Route::get('teacher/content/edit/{id}',[ContentController::class, 'edit']);
    Route::post('teacher/content/edit/{id}',[ContentController::class, 'update']);
    Route::get('teacher/content/delete/{id}',[ContentController::class, 'delete']);

    Route::get('teacher/course/list',[CourseController::class, 'list']);
    Route::get('teacher/course/add',[CourseController::class, 'add']);
    Route::post('teacher/course/add',[CourseController::class, 'insert']);
    Route::get('teacher/course/edit/{id}',[CourseController::class, 'edit']);
    Route::post('teacher/course/edit/{id}',[CourseController::class, 'update']);
    Route::get('teacher/course/delete/{id}',[CourseController::class, 'delete']);

    Route::get('teacher/change_password',[UserController::class, 'change_password']);
    Route::post('teacher/change_password',[UserController::class, 'update_change_password']);
   
});

Route::group(['middleware' => 'student'], function (){
    Route::get('student/dashboard',[DashboardController::class, 'dashboard']);
    Route::get('student/change_password',[UserController::class, 'change_password']);
    Route::post('student/change_password',[UserController::class, 'update_change_password']);
 
});

Route::get('frontend/home',[PublicController::class, 'home']);
Route::get('frontend/course',[PublicController::class, 'course']);
Route::get('frontend/user',[PublicController::class, 'user']);
Route::get('frontend/lesson',[PublicController::class, 'lesson']);