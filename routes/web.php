<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\FavouriteListController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoanApplyController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\loanCriteriaController;
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

Route::get('/users/create',[UserController::class,'createform']);
Route::post('/user/store',[UserController::class,'userStore'])->name('user.store');



Route::get('/bank',[BankController::class,'bank']);
Route::get('/bank/create',[BankController::class,'createform']);
Route::post('/bank/store',[BankController::class,'bankstore'])->name('bank.store');


Route::get('/admins',[AdminController::class,'admin']);

Route::get('/loans',[LoanController::class,'loan']);
Route::get('/loan/create',[LoanController::class,'createform']);
Route::post('loan/store',[LoanController::class,'loanStore'])->name('loan.store');


Route::get('/loantype',[LoanTypeController::class,'list']);
Route::get('/loantype/create',[LoanTypeController::class,'createform']);
Route::post('/loantype/store',[LoanTypeController::class,'loantypelist'])->name('loantype.store');




Route::get('/loanapply',[LoanApplyController::class,'list']);
Route::get('/loanapply/create',[LoanApplyController::class,'createform']);
Route::post('/loanapply/store',[LoanApplyController::class,'loanstore'])->name('loan.apply.store');



Route::get('/criteria',[CriteriaController::class,'list']);
Route::get('/loancriteria',[loanCriteriaController::class,'list']);
Route::get('/report',[ReportController::class,'reports']);


Route::get('/fav',[FavouriteListController::class,'list']);
Route::get('/favs-create',[FavouriteListController::class,'formcreate'])->name('fav.create');
Route::post('/fav.store',[FavouriteListController::class,'favStore'])->name('fav.store');