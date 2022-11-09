<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EmployeeController::class, 'index'])->name('emp.index');
Route::get('/signin', [EmployeeController::class, 'signin'])->name('emp.signin');
Route::get('/signup', [EmployeeController::class, 'signup'])->name('emp.signup');
Route::get('/dashboard', [EmployeeController::class, 'dashboard'])->name('emp.dashboard');

Route::post('/store', [EmployeeController::class, 'store'])->name('emp.store');
