<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\FavouriteListController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoanApplyController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LoanTypeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'home']);
Route::get('/user',[UserController::class,'user']);
Route::get('/bank',[BankController::class,'bank']);
Route::get('/admins',[AdminController::class,'admin']);
Route::get('/loans',[LoanController::class,'loan']);
Route::get('/loantype',[LoanTypeController::class,'list']);
Route::get('/loanapply',[LoanApplyController::class,'list']);
Route::get('/criteria',[CriteriaController::class,'list']);
Route::get('/report',[ReportController::class,'reports']);
Route::get('/fav',[FavouriteListController::class,'list']);