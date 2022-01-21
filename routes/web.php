<?php

use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AttandanceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\MyDetailsController;
use App\Http\Controllers\MyInfoController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TimeTableController;
use Illuminate\Support\Facades\Route;

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
//Get Requests

Route::get('/',[LogInController::class,'index'])->name("LogIn");

Route::get('/register',[RegisterController::class,'index'])->name("Register");

Route::get('/eventboard',[EventController::class,'index'])->name("EventBoard");

Route::get('/announcement',[AnnouncementController::class,'index'])->name("Announcement");

Route::get('/timetable',[TimeTableController::class,'index'])->name("TimeTable");

Route::get('/attandance',[AttandanceController::class,'index'])->name("Attandance");

Route::get('/photos',[PhotosController::class,'index'])->name("Photos");

Route::get('/myinfo',[MyInfoController::class,'index'])->name("MyInfo");

Route::get('/academics',[AcademicsController::class,'index'])->name("Academics");


//Post method routes

Route::post('/register',[RegisterController::class,'create'])->name('RegisterAction');

Route::post('/login',[LogInController::class,'create'])->name('LogInAction');