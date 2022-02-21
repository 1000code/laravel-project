<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeAdminController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/calc', [HomeAdminController::class, 'Calc']);
// user route
Route::get('/index', [HomeAdminController::class, 'Home']);
Route::get('/update', [HomeAdminController::class, 'Update']);
