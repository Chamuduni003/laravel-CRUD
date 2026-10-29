<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeController;

Route::get('/', [EmployeeController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});


Route::resource("/employee",EmployeeController::class);