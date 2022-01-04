<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\AdminController;
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


Route::get('/',[HomeController::class,'index']);


Route::get('/home',[HomeController::class,'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/add_doctor_view',[AdminController::class,'addview']);


Route::POST('/upload_doctor',[AdminController::class,'upload']);

Route::POST('/appointment',[HomeController::class,'appointment']);

Route::GET('/myappointment',[HomeController::class,'myappointment']);

Route::GET('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::GET('/showappointment',[AdminController::class,'showappointment']);

Route::GET('/approved/{id}',[AdminController::class,'approved']);

Route::GET('/canceled/{id}',[AdminController::class,'approved']);
