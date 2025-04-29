<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/alumni');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::resource('/alumni', AlumniController::class)->only(['index', 'create', 'store', 'edit', 'update', 'show', 'destroy']);;
Route::resource('/admin', AdminController::class);
