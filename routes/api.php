<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
 
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostulePosteController;
 
 
Route::get('/employees',[App\Http\Controllers\EmployeeController::class, 'index']);
 
Route::post('/save',[App\Http\Controllers\EmployeeController::class, 'store']);
 
Route::put('/update/{id}',[App\Http\Controllers\EmployeeController::class, 'update']);
 
Route::delete('/delete/{id}',[App\Http\Controllers\EmployeeController::class, 'destroy']);

// ==============Postuleposte============

Route::get('/postulepostes',[App\Http\Controllers\PostuleposteController::class, 'index']);
 
Route::post('/postulepostes',[App\Http\Controllers\PostulePosteController::class, 'store']);
 
Route::put('/update/{id}',[App\Http\Controllers\PostulePosteController::class, 'update']);
 
Route::delete('/delete/{id}',[App\Http\Controllers\PostulePosteController::class, 'destroy']);
 
 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', [AuthController::class,'login']);
Route::post('register', [AuthController::class,'register']);

Route::group(['middleware'=>'api'],function(){
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);
});