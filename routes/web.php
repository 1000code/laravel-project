<?php

use App\Http\Controllers\Admin\AboutAdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', [AboutAdminController::class, 'Index'])->name('admin.about');
Route::get('/about/form', [AboutAdminController::class, 'Form'])->name('admin.about.form');
Route::post('/about/store', [AboutAdminController::class, 'Store'])->name('admin.about.store');
