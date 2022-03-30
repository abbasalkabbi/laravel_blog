<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;      
use App\Http\Controllers\PostController;      
use App\Http\Controllers\UseController;      

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[HomeController::class,'index'])->name("home");
Route::get('/login',[UseController::class,'login_page'])->name("login.user");
Route::get('/registered',[UseController::class,'registered_page'])->name("registered.user");
Route::post('/adduser',[UseController::class,'adduser'])->name("add.user");
Route::post('/loginuser',[UseController::class,'loginuser'])->name("loginuser");
Route::post('/addcomment',[PostController::class,'index'])->name("addcomment.post");


