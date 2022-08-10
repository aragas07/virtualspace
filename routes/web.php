<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\IncomingStudentsController;
use App\Http\Controllers\AuthorizeController;
use App\Http\Controllers\ProgramHeadController;
use App\Http\Controllers\SemestersController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AllumniController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/clear-cache',function(){
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE';
});
Route::get('/', [LoginController::class,'showLoginForm'])->name('login');
Route::get('/choose',[AuthorizeController::class,'choose']);
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/userlogin',[LoginController::class, 'login'])->name('userlogin');
Route::post('/userregister',[RegisterController::class, 'register'])->name('userregister');
Route::get('/welcome',function(){ return view('incomingstudents.welcome'); });
Route::get('/search',function(){ return view('incomingstudents.search'); });
Route::post('/acceptConsent',[IncomingStudentsController::class, 'accept'])->name('acceptConsent');
Route::post('/storeStud',[IncomingStudentsController::class, 'store'])->name('studIn');

Route::resource('/enroll', IncomingStudentsController::class);
Route::controller(AllumniController::class)->group(function(){
    Route::post('/Province','returnProvince')->name('getProv');
    Route::post('/City','returnCity')->name('getCity');
    Route::post('/Barangay','returnBrgy')->name('getBrgy');
    Route::post('/injob','insertJob')->name('injob');
});
Route::controller(IncomingStudentsController::class)->group(function(){
    Route::post('/upreq','uploadreq')->name('uploadreq');
    Route::post('/searchTicket','searchticket');
    Route::get('/studentform/{type}','studentform')->name('studentform');
    Route::post('/stop','StopNum')->name('stop');
    Route::post('/getnum','GetNum')->name('getnum');
});
Route::resource('/{request}',AuthorizeController::class);
// Route::post('/upreq',[IncomingStudentsController::class, 'uploadreq'])->name('uploadreq');
// Route::post('/searchTicket',[IncomingStudentsController::class, 'searchticket']);
// Route::get('/studentform/{type}',[IncomingStudentsController::class,'studentform'])->name('studentform');
// Route::post('/stop',[IncomingStudentsController::class,'StopNum'])->name('stop');
// Route::post('/getnum',[IncomingStudentsController::class,'GetNum'])->name("getnum");

// Route::get('/sample',[IncomingStudentsController::class, 'showView']);
// Route::group(['middleware'=> 'auth'], function(){
// 	Route::get('auth/{type}',[AuthorizeController::class, 'index']);
// });
// Auth::routes();
// Route::resource('/admin', 'HomeController')->name('dashboard');
// Route::post('/home', 'App\Http\Controllers\HomeController@add')->name('dashboard.add');

//  Route::group(['middleware' => 'auth'], function () {
// 	Route::resource('incoming/incoming-students', IncomingStudentsController::class);
// 	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
// 	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
// 	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
// 	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
// 	Route::resource('/semesters', SemestersController::class);
// 	Route::resource('/students', StudentsController::class);
// 	Route::resource('/employees', EmployeesController::class);
// 	Route::resource('/program-head', ProgramHeadController::class);
// 	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
// });