<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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
Route::get ('students', [HomeController::class, 'students']);
Route::get('/',[HomeController::class, 'home']);
Route::get('modules/{programe}',[HomeController::class,'SpecificModules']);
Route::get ('modules', [HomeController::class, 'modules']);//impliment function
Route::get ('/show/{id}',[homecontroller::class,'studentDetails']);

//Route::get('modules'{programe},[HomeController::class,modulesprogrames]);

//Route::get('/','App\Http\Controllers\HomeController@Home');

 
