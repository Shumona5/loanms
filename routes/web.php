<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\FavouriteListController;
use App\Http\Controllers\Frontend\LoanController as FrontendLoanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoanApplyController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\loanCriteriaController;
use App\Http\Controllers\LoanTypeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebHomeController;
use Illuminate\Auth\Events\Logout;
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
//........................Frontend Route ......................
Route::get('/',[WebHomeController::class,'home'])->name('user.home');
Route::post('register',[WebHomeController::class,'registration'])->name('user.registration');
Route::post('login',[WebHomeController::class,'login'])->name('user.login');

Route::get('/searchloan',[FrontendLoanController::class,'list'])->name('user.searchloan');
Route::get('/viewnow/{loan_id}',[FrontendLoanController::class,'view'])->name('user.viewnow');
Route::get('/findloan',[FrontendLoanController::class,'findloan'])->name('user.findloan');

     
Route::group(["middleware"=>'auth'],function(){
   
    Route::get('/logout',[WebHomeController::class,'logout'])->name('user.logout');
    Route::get('/profile',[WebHomeController::class,'profile'])->name('user.profile');
    Route::get('profile/cancel/{profile_id}',[WebHomeController::class,'cancel'])->name('user.cancel');
    Route::get('profile/edit/{profile_id}',[WebHomeController::class,'edit'])->name('profile.edit');
    Route::get('profile/update/{profile_id}',[WebHomeController::class,'update'])->name('profile.update');
    Route::post('/applynowform/{loan_id}',[FrontendLoanController::class,'applyNowForm'])->name('user.applyform');
    Route::get('/add-to-wish-list/{loan_id}',[FrontendLoanController::class,'addWishList'])->name('add.to.wish.list');
    Route::get('/applynow/{loan_id}',[FrontendLoanController::class,'applyNow'])->name('user.applynow');

});





//   ...................Backend Route.............

Route::get('/login',[UserController::class,'login'])->name('login.form');
Route::post('/login/store',[UserController::class,'store'])->name('login.store');

Route::group(["middleware"=>'auth','prefix'=>'admin'],function(){
    Route::group(["middleware"=>"checkAdmin"],function(){

Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/',[HomeController::class,'home'])->name('dashboard');

Route::get('/user',[UserController::class,'user'])->name('user');
Route::get('/user/view/{user_id}',[UserController::class,'viewUser'])->name('user.view');
Route::get('/user/delete/{user_id}',[UserController::class,'deleteUser'])->name('user.delete');
Route::get('/user/edit/{user_id}',[UserController::class,'editUser'])->name('user.edit');
Route::put('/user/update/{user_id}',[UserController::class,'updateUser'])->name('user.update');

Route::get('/bank',[BankController::class,'bank'])->name('bank');
Route::get('/bank/create',[BankController::class,'createform'])->name('bank.create');
Route::post('/bank/store',[BankController::class,'bankstore'])->name('bank.store');
Route::get('/bank/delete/{bank_id}',[BankController::class,'deleteBank'])->name('admin.bank.delete');
Route::get('/bank/view/{bank_id}',[BankController::class,'viewBank'])->name('admin.bank.view');
Route::get('/bank/edit/{bank_id}',[BankController::class,'editBank'])->name('admin.bank.edit');
Route::put('/bank/update/{bank_id}',[BankController::class,'update'])->name('admin.bank.update');

Route::get('/admin-users',[AdminController::class,'admin'])->name('admin');
                                                                        
Route::get('/loans',[LoanController::class,'loan'])->name('loan');
Route::get('/loan/create',[LoanController::class,'createform'])->name('loan.create');
Route::post('/loan/store',[LoanController::class,'loanStore'])->name('loan.store');
Route::get('/loan/view/{loan_id}',[LoanController::class,'viewloan'])->name('loan.view');
Route::get('/loan/delete/{loan_id}',[LoanController::class,'deleteloan'])->name('loan.delete');
Route::get('/loan/edit/{loan_id}',[LoanController::class,'editloan'])->name('loan.edit');
Route::put('/loan/update/{loan_id}',[LoanController::class,'updateLoan'])->name('loan.update');

Route::get('/loantype',[LoanTypeController::class,'list'])->name('loantype');
Route::get('/loantype/create',[LoanTypeController::class,'createform'])->name('loan.type.create');
Route::post('/loantype/store',[LoanTypeController::class,'loantypelist'])->name('loantype.store');
Route::get('/loantype/delete/{loantype_id}',[LoanTypeController::class,'deleteloantype'])->name('loantype.delete');
Route::get('/loantype/view/{loantype_id}',[LoanTypeController::class,'viewloantype'])->name('loantype.view');

Route::get('/loanapply',[LoanApplyController::class,'list'])->name('loanapply');
Route::get('/loanapply/create',[LoanApplyController::class,'createform']);
Route::get('/loanappliers/view/{appliers_id}',[LoanApplyController::class,'viewLoanAppliers'])->name('loanappliers.view');
Route::get('/loanappliers/delete{appliers_id}',[LoanApplyController::class,'deleteLoanAppliers'])->name('loanappliers.delete');
Route::get('/loanappliers/edit{appliers_id}',[LoanApplyController::class,'editLoanAppliers'])->name('loanappliers.edit');
Route::put('/loanappliers/update{appliers_id}',[LoanApplyController::class,'updateAppliers'])->name('loanappliers.update');
Route::get('loanappliers/accept/{loanappliers_id}',[LoanApplyController::class,'loanAccept'])->name('loanappliers.accept');
Route::get('loanappliers/reject/{loanappliers_id}',[LoanApplyController::class,'loanReject'])->name('loanappliers.reject');

Route::get('/criteria',[CriteriaController::class,'list'])->name('criteria');
Route::get('criteria/create',[CriteriaController::class,'criteriaList'])->name('criteria.create');
Route::post('criteria/store',[CriteriaController::class,'criteriaStore'])->name('criteria.store');
Route::get('criteria/delete/{criteria_id}',[CriteriaController::class,'delete'])->name('criteria.delete');
Route::get('criteria/view/{criteria_id}',[CriteriaController::class,'view'])->name('criteria.view');
Route::get('criteria/edit/{criteria_id}',[CriteriaController::class,'edit'])->name('criteria.edit');
Route::put('criteria/update/{criteria_id}',[CriteriaController::class,'update'])->name('criteria.update');

Route::get('/loancriteria',[loanCriteriaController::class,'list'])->name('loancriteria');
Route::get('/report',[ReportController::class,'reports'])->name('report');
Route::get('/report/generate',[ReportController::class,'reportGenerate'])->name('report.generate');

Route::get('/fav',[FavouriteListController::class,'list'])->name('fav');
Route::get('/favs-create',[FavouriteListController::class,'formcreate'])->name('fav.create');
Route::post('/fav.store',[FavouriteListController::class,'favStore'])->name('fav.store');

});
});

