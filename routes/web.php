<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Loginmenu;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\AppointmentController;


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

Route::get('/home','App\Http\Controllers\HomeController@redirect');

Route::get('/logout', [Loginmenu::class, 'logout'])->name('logout');

Route::get('add_doctor',function()
{
            return view('add_doctor');

});

Route::get('admin',function()
{
    return view('admin');
});

Route::post('add_doctor','App\Http\Controllers\AdminController@upload');

 

Route::get('search_doctor','App\Http\Controllers\DoctorController@doc');

Route::post('appointment','App\Http\Controllers\homeController@appointment');

Route::get('Appointmentscreate','App\Http\Controllers\adminController@appoint');



Route::get('showdoctor','App\Http\Controllers\AdminController@showdoctor');

Route::get('deletedoctor/{id}','App\Http\Controllers\AdminController@deletedoctor');

Route::get('updatedoctor/{id}','App\Http\Controllers\AdminController@updatedoctor');

Route::post('editdoctor/{id}','App\Http\Controllers\AdminController@editdoctor');

Route::get('approved/{id}','App\Http\Controllers\AdminController@approved');

Route::get('cancled/{id}','App\Http\Controllers\AdminController@cancled');


 

Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
