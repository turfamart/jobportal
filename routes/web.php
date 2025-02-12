<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
/* 
Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/account/profile',[AccountController::class,'profile'])->name('account.profile');
Route::get('/account/logout',[AccountController::class,'logout'])->name('account.logout');

Route::group(['account'] , function(){

    Route::group(['middleware' => 'guest'] , function(){
        Route::get('/account/register',[AccountController::class,'registration'])->name('account.register');
        Route::post('/account/process-register',[AccountController::class,'processRegistration'])->name('account.processRegister');
        Route::get('/account/login',[AccountController::class,'login'])->name('account.login');
        Route::post('/account/authenticate',[AccountController::class,'authenticate'])->name('account.authenticate');
    });
});

