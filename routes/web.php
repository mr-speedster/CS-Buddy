<?php

use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminAcademicsController;
use App\Http\Controllers\AdminAnnouncementController;
use App\Http\Controllers\AdminAttandanceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AdminPhotosController;
use App\Http\Controllers\AdminStudentInfoController;
use App\Http\Controllers\AdminTimeTableController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AttandanceController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\MyDetailsController;
use App\Http\Controllers\MyInfoController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TimeTableController;
use Illuminate\Support\Facades\Route;
use App\Events\Message;
use App\Http\Controllers\ViewController;

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

//Students

Route::get('/',[LogInController::class,'index'])->name("LogIn");

Route::get('/register',[RegisterController::class,'index'])->name("Register");

Route::get('/eventboard',[EventController::class,'index'])->name("EventBoard");

Route::get('/announcement',[AnnouncementController::class,'index'])->name("Announcement");

Route::get('/timetable',[TimeTableController::class,'index'])->name("TimeTable");

Route::get('/attandance',[AttandanceController::class,'index'])->name("Attandance");

Route::get('/photos',[PhotosController::class,'index'])->name("Photos");

Route::get('/myinfo',[MyInfoController::class,'index'])->name("MyInfo");

Route::get('/academics',[AcademicsController::class,'index'])->name("Academics");

Route::get('/livechat',[ChatController::class,'index'])->name("liveChat");

//Admin

Route::get('/admin/login',[AdminController::class,'index'])->name("AdminLogin");

Route::get('/admin/eventboard',[AdminEventController::class,'index'])->name('AdminEvent');

Route::get('/admin/announcement',[AdminAnnouncementController::class,'index'])->name('AdminAnnouncement');

Route::get('/admin/timetable',[AdminTimeTableController::class,'index'])->name('AdminTimeTable');

Route::get('/admin/attandance',[AdminAttandanceController::class,'index'])->name('AdminAttandance');

Route::get('/admin/photos',[AdminPhotosController::class,'index'])->name('AdminPhotos');

Route::get('/admin/studentinfo',[AdminStudentInfoController::class,'index'])->name('AdminStudentInfo');

Route::get('/admin/academics',[AdminAcademicsController::class,'index'])->name('AdminAcademics');





//Post method routes
Route::post('/register',[RegisterController::class,'create'])->name('RegisterAction');

Route::post('/login',[LogInController::class,'create'])->name('LogInAction');

Route::post('/admin/login',[AdminController::class,'create'])->name('AdminLogInAction');

Route::post('/event',[AdminEventController::class,'create'])->name('EventAction');

Route::post('/announcement',[AdminAnnouncementController::class,'create'])->name('AnnouncementAction');

Route::post('/academics',[AdminAcademicsController::class,'create'])->name('AcademicsAction');

Route::post('/timetable',[AdminTimeTableController::class,'create'])->name('TimeTableAction');

Route::post('/attendance',[AdminAttandanceController::class,'create'])->name('AttendanceAction');

Route::post('/photos',[AdminPhotosController::class,'create'])->name('PhotosAction');

Route::post('/livechat',[ChatController::class,'create'])->name("liveChatAction");

/******************** Admin View **************/

Route::get('/admin/view/user',[ViewController::class,'UserView'])->name("UserView");

Route::get('/admin/view/event',[ViewController::class,'EventView'])->name("EventView");

Route::get('/admin/view/announcement',[ViewController::class,'AnnouncementView'])->name("AnnouncementView");

Route::get('/admin/view/timetable',[ViewController::class,'TimeTableView'])->name("TimeTableView");

Route::get('/admin/view/attendance',[ViewController::class,'AttendanceView'])->name("AttendanceView");

Route::get('/admin/view/photos',[ViewController::class,'PhotosView'])->name("PhotosView");

Route::get('/admin/view/academics',[ViewController::class,'AcademicsView'])->name("AcademicsView");

Route::get('/admin/view/admin',[ViewController::class,'AdminView'])->name("AdminView");


/*******Delete */

Route::get('/admin/view/user/{id}',[ViewController::class,'UserDelete'])->name("UserDelete");

Route::get('/admin/view/event/{id}',[ViewController::class,'EventDelete'])->name("EventDelete");

Route::get('/admin/view/announcement/{id}',[ViewController::class,'AnnouncementDelete'])->name("AnnouncementDelete");

Route::get('/admin/view/timetable/{id}',[ViewController::class,'TimeTableDelete'])->name("TimeTableDelete");

Route::get('/admin/view/attendance/{id}',[ViewController::class,'AttendanceDelete'])->name("AttendanceDelete");

Route::get('/admin/view/photos/{id}',[ViewController::class,'PhotosDelete'])->name("PhotosDelete");

Route::get('/admin/view/academics/{id}',[ViewController::class,'AcademicsDelete'])->name("AcademicsDelete");

Route::get('/admin/view/admin/{id}',[ViewController::class,'AdminDelete'])->name("AdminDelete");


/*****Update */

Route::get('/admin/view/user/update/{id}',[ViewController::class,'UserUpdate'])->name("UserUpdate");

Route::get('/admin/view/event/update/{id}',[ViewController::class,'EventUpdate'])->name("EventUpdate");

Route::get('/admin/view/announcement/update/{id}',[ViewController::class,'AnnouncementUpdate'])->name("AnnouncementUpdate");

Route::get('/admin/view/timetable/update/{id}',[ViewController::class,'TimeTableUpdate'])->name("TimeTableUpdate");

Route::get('/admin/view/attendance/update/{id}',[ViewController::class,'AttendanceUpdate'])->name("AttendanceUpdate");

Route::get('/admin/view/photos/update/{id}',[ViewController::class,'PhotosUpdate'])->name("PhotosUpdate");

Route::get('/admin/view/academics/update/{id}',[ViewController::class,'AcademicsUpdate'])->name("AcademicsUpdate");

Route::get('/admin/view/admin/update/{id}',[ViewController::class,'AdminUpdate'])->name("AdminUpdate");



Route::post('/admin/view/user/update/{id}',[ViewController::class,'UserUpdateAction'])->name("UserUpdateAction");

Route::post('/admin/view/event/update/{id}',[ViewController::class,'EventUpdateAction'])->name("EventUpdateAction");

Route::post('/admin/view/announcement/update/{id}',[ViewController::class,'AnnouncementUpdateAction'])->name("AnnouncementUpdateAction");

Route::post('/admin/view/timetable/update/{id}',[ViewController::class,'TimeTableUpdateAction'])->name("TimeTableUpdateAction");

Route::post('/admin/view/attendance/update/{id}',[ViewController::class,'AttendanceUpdateAction'])->name("AttendanceUpdateAction");

Route::post('/admin/view/photos/update/{id}',[ViewController::class,'PhotosUpdateAction'])->name("PhotosUpdateAction");

Route::post('/admin/view/academics/update/{id}',[ViewController::class,'AcademicsUpdateAction'])->name("AcademicsUpdateAction");

Route::post('/admin/view/admin/update/{id}',[ViewController::class,'AdminUpdateAction'])->name("AdminUpdateAction");
