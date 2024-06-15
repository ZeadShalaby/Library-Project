<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


//?start//
// ! all routes / api here must be authentcated
Route::group(['middleware' => ['api']], function () {


    ///?start///
    // todo group user to login & logout & register //
    Route::group(['prefix' =>'users'], function () {
    Route::POST('/login', [UserController::class, 'login']);
    Route::POST('/regist',[UserController::class, 'register']);
    /*
     todo Invalidate Token Security Site
     todo  Brocken Access Controller Users enumeration
    */
    Route::POST('/logout',[UserController::class, 'logout'])->middleware('auth.guard:api');
    //// ? return profile information ////
    Route::get('/profile',[UserController::class, 'profile'])->middleware('auth.guard:api');
    });
    //?end//
    
});
//?end//