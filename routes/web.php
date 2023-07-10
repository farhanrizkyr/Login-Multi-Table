<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\RegisterController;

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\RegisterAdminController;
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

Route::get('/user/dashboard/',[DashboardController::class,'index']);


Route::get('/user/login',[LoginUserController::class,'index'])->name('login');
Route::post('/user/login',[LoginUserController::class,'login']);
Route::get('/logout',[LoginUserController::class,'logout']);

Route::get('/user/register/',[RegisterController::class,'index']);
Route::post('/user/register/',[RegisterController::class,'create']);

Route::get('/admin/dashboard/',[DashboardAdminController::class,'index']);

Route::get('/admin/login',[LoginAdminController::class,'logadmin'])->name('admin.login');
Route::post('/admin/login',[LoginAdminController::class,'login_admin']);
Route::get('/admin/logout',[LoginAdminController::class,'logout_admin']);

Route::get('/admin/register/',[RegisterAdminController::class,'register']);
Route::post('/admin/register/',[RegisterAdminController::class,'post_register']);