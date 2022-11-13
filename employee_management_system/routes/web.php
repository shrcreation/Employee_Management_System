<?php

use App\Http\Controllers\Api\AttendanceController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Backend\AwardsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\CountryController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\ChangePasswordController;
use App\Http\Controllers\Backend\EventsController;
use App\Http\Controllers\Backend\LeavesController;
use App\Http\Controllers\Backend\NoticesController;
use App\Http\Controllers\Backend\SalariesController;
use App\Http\Controllers\Backend\TasksController;

Route::get('/', function () {
    return view('index');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('countries', CountryController::class);
    Route::resource('departments', DepartmentController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('tasks', TasksController::class);
    Route::resource('events',EventsController::class);
    Route::resource('awards', AwardsController::class);
    Route::resource('notices', NoticesController::class);
    Route::resource('leave',LeavesController::class);
    Route::resource('salaries', SalariesController::class);
    Route::get('/pay',[SalariesController::class, 'pay'])->name('pay');
    Route::get('/report', [AttendanceController::class, 'report'])->name('report');

    Route::post('admin/users/{user}/change-password', [ChangePasswordController::class, 'change_password'])->name('users.change.password');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('attendances', AttendanceController::class);
