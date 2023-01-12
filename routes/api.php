<?php

use App\Http\Controllers\Api\CriteriaController;
use App\Http\Controllers\Api\LoanController;
use App\Http\Controllers\Api\LoanTypeController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/get-loantypes',[LoanTypeController::class,'getloantype']);
Route::post('/loantypes-store',[LoanTypeController::class,'storeloantype']);
//   Single Loan Type View
Route::get('/loantype/view/{id}',[LoanTypeController::class,'viewloantype']);

// Delete a Loan Type
Route::get('/loantype/delete/{id}',[LoanTypeController::class,'deleteloantype']);

// Update loan type
Route::put('/loantype/update/{id}',[LoanTypeController::class,'updateloantype']);


Route::get('/get-loanusers',[UserController::class,'user']);
Route::get('/get-loans',[LoanController::class,'loans']);
Route::get('/get-criterias',[CriteriaController::class,'criteria']);