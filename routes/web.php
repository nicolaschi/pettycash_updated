<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\agentController;
use App\Http\Controllers\Request;

use App\Http\Middleware\Admin;

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

// Route::get('/', function () {
//     return view('auth.login');
// });




Route::get('/', [HomeController::class,'index']);

Route::get('/dashboard',[AdminController::class, 'dashboard']);





Route::middleware(['admin'])->group(function () {
    //ACCOUNT

     Route::get('/editprofile',[AdminController::class, 'editprofile']);
     Route::get('/profile',[AdminController::class, 'profile']);
     Route::get('/users',[AdminController::class, 'users']);
     Route::get('/updateuser/{id}',[AdminController::class, 'updateuser']);
     Route::post('/updatua/{id}',[AdminController::class, 'updatua']);
     Route::get('/createuser',[AdminController::class, 'createuser']);
     Route::post('/adduser',[AdminController::class, 'adduser']);

     //PETTYCASH
     Route::get('/createpettycash',[AdminController::class, 'createpettycash']);
     Route::post('/addpettycash',[AdminController::class, 'addpettycash']);
     Route::get('/listpettycash',[AdminController::class, 'listpettycash']);
     Route::get('/managepettycash/{id}',[AdminController::class, 'managepettycash']);
     Route::get('/approve/{id}',[AdminController::class, 'approve']);
     Route::get('/deny/{id}',[AdminController::class, 'deny']);
});


    //ACCOUNT

   Route::get('/home',[agentController::class, 'home']);

    Route::get('/agenteditprofile',[agentController::class, 'agenteditprofile']);
    Route::get('/agentprofile',[agentController::class, 'agentprofile']);

    //  //PETTYCASH
      Route::get('/agentcreatepettycash',[agentController::class, 'agentcreatepettycash']);
     Route::POST('/agentpetty',[agentController::class, 'agentpetty']);
     Route::get('/agentlistpettycash',[agentController::class, 'agentlistpettycash']);
     Route::get('/approvedlistpettycash',[agentController::class, 'approvedagentlistpettycash']);
     Route::get('/agentmanagepettycash/{id}',[agentController::class, 'agentmanagepettycash']);
    Route::get('/approve/{id}',[agentController::class, 'approve']);
    Route::get('/deny/{id}',[agentController::class, 'deny']);



Route::view('/homee', 'homee')->middleware(['auth', 'verified']);
Route::view('/profile/edit', 'profile.edit')->middleware('auth');
Route::view('/profile/password', 'profile.password')->middleware('auth');
