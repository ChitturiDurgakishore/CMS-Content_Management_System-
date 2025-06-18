<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'HeaderInfo']);
Route::view('/Admin','admin.login');
Route::post('/LoginCheck',[Admin::class,'AdminLoginCheck']);
Route::view('/AdminHome','admin.dashboard');
Route::get('/Header',[Admin::class,'HeaderItems']);
//HeaderOperations
Route::get('/Delete/{id}',[Admin::class,'DeleteHeader']);
Route::view('/AddNewHeader','admin.NewHeader');
Route::post('AddingNewHeader',[Admin::class,'NewHeader']);
Route::get('/Change/{id}',[Admin::class,'HeaderInfo']);
Route::put('/UpdatingHeader/{id}',[Admin::class,'UpdateHeader']);

//BackgroundOperations

Route::get('/Background',[Admin::class,'ImageFetching']);
Route::put('/upload-image',[Admin::class,'UpdatingImage']);

//FooterOperations
Route::get('/Footer',[Admin::class,'LinksInfo']);
Route::get('/UpdateLink/{id}',[Admin::class,'UpdatingLinks']);
Route::put('/Updated',[Admin::class,'UpdateDone']);
Route::get('/DeleteLink/{id}',[Admin::class,'Deleted']);

// Users Operations
Route::get('/Users',[Admin::class,'GetAllusers']);
Route::get('/PendingVerification',[Admin::class,'PendingUsers']);
Route::get('/Verify/{id}',[Admin::class,'UserDetails']);
Route::put('/VerificationComplete/{id}',[Admin::class,'VerifyingUser']);
//Customers
Route::post('/Registering',[HomeController::class,'Registration']);
Route::view('/Login','user.login');
Route::post('/LoggingIn',[HomeController::class,'Logging']);
// HomeButtons
Route::view('/Contact','contact');
Route::view('/Mail','mail');
Route::view('UserRegister','user.registration');

// [HomeController::class,'Regitration']
