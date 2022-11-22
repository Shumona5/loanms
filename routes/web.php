<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
use App\Http\Controllers\WebHomeController;
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

Route::get('/',[WebHomeController::class,'home']);
Route::post('register',[WebHomeController::class,'registration'])->name('user.registration');






//   ...................Backend Route.............

Route::get('/login',[UserController::class,'login'])->name('login.form');
Route::post('/login/store',[UserController::class,'store'])->name('login.store');

Route::group(["middleware"=>'auth','prefix'=>'admin'],function(){

Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/',[HomeController::class,'home'])->name('dashboard');

Route::get('/user',[UserController::class,'user'])->name('user');
Route::get('/users/create',[UserController::class,'createform']);
Route::post('/user/store',[UserController::class,'userStore'])->name('user.store');
Route::get('/user/view/{user_id}',[UserController::class,'viewUser'])->name('user.view');

Route::get('/bank',[BankController::class,'bank'])->name('bank');
Route::get('/bank/create',[BankController::class,'createform'])->name('bank.create');
Route::post('/bank/store',[BankController::class,'bankstore'])->name('bank.store');

Route::get('/bank/delete/{bank_id}',[BankController::class,'deleteBank'])->name('admin.bank.delete');
Route::get('/bank/view/{bank_id}',[BankController::class,'viewBank'])->name('admin.bank.view');
Route::get('/bank/edit/{bank_id}',[BankController::class,'editBank'])->name('admin.bank.edit');
Route::put('/bank/update/{bank_id}',[BankController::class,'update'])->name('admin.bank.update');

Route::get('/admins',[AdminController::class,'admin'])->name('admin');

Route::get('/loans',[LoanController::class,'loan'])->name('loan');
Route::get('/loan/create',[LoanController::class,'createform']);
Route::post('loan/store',[LoanController::class,'loanStore'])->name('loan.store');

Route::get('/loantype',[LoanTypeController::class,'list'])->name('loantype');
Route::get('/loantype/create',[LoanTypeController::class,'createform'])->name('loan.type.create');
Route::post('/loantype/store',[LoanTypeController::class,'loantypelist'])->name('loantype.store');
Route::get('/loantype/delete',[LoanTypeController::class,'deleteloantype'])->name('admin.loantype.delete');

Route::get('/loanapply',[LoanApplyController::class,'list'])->name('loanapply');
Route::get('/loanapply/create',[LoanApplyController::class,'createform']);
Route::post('/loanapply/store',[LoanApplyController::class,'loanstore'])->name('loan.apply.store');

Route::get('/criteria',[CriteriaController::class,'list'])->name('criteria');
Route::get('/loancriteria',[loanCriteriaController::class,'list'])->name('loancriteria');
Route::get('/report',[ReportController::class,'reports'])->name('report');

Route::get('/fav',[FavouriteListController::class,'list'])->name('fav');
Route::get('/favs-create',[FavouriteListController::class,'formcreate'])->name('fav.create');
Route::post('/fav.store',[FavouriteListController::class,'favStore'])->name('fav.store');

});