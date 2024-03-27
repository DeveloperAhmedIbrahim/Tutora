<?php

use App\Http\Controllers\Admin\DashboardController AS _DashboardController;
use App\Http\Controllers\Admin\AuthController AS _AuthController;
use App\Http\Controllers\Admin\UserController AS _UserController;
use App\Http\Controllers\Admin\PackageController AS _PackageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AdminGuard;

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

// Authentication Routes
Route::post('login',[AuthController::class,"login"]);
Route::post('register',[AuthController::class,"register"]);
Route::get('logout',[AuthController::class,"logout"]);

// User Screens Routes
Route::get('/',[HomeController::class,"index"]);
Route::get('home',[HomeController::class,"home"]);
Route::get('about',[HomeController::class,"about"]);
Route::get('courses',[HomeController::class,"courses"]);
Route::get('course/details',[HomeController::class,"course_details"]);
Route::get('contact',[HomeController::class,"contact"]);
Route::get('login',[HomeController::class,"login"]);
Route::get('register',[HomeController::class,"register"]);

//Admin Panel Routes
Route::match(['GET','POST'],'admin/login',[_AuthController::class,"login"]);
Route::get('admin/logout',[_AuthController::class,"logout"]);
Route::prefix('admin')->middleware(AdminGuard::class)->group(function(){
    Route::match(['GET','POST'],'profile',[_AuthController::class,'profile']);
    Route::get('dashboard',[_DashboardController::class,'index']);
    Route::prefix('users')->group(function(){
        Route::get('list',[_UserController::class,'list']);
        Route::get('delete/{id}',[_UserController::class,'delete']);
    });
    Route::prefix('packages')->group(function(){
        Route::get('list',[_PackageController::class,'list']);
        Route::get('new',[_PackageController::class,'new']);
        Route::get('edit/{id}',[_PackageController::class,'edit']);
        Route::get('delete/{id}',[_PackageController::class,'delete']);
        Route::post('insert',[_PackageController::class,'insert']);
        Route::post('update',[_PackageController::class,'update']);
    });
});
