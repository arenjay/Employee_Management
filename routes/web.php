<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeecontroller;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('employee', [employeecontroller::class, 'index'])->name('employee.index');
Route::post('employee', [employeecontroller::class, 'store']);
Route::get('employee/{id}/update',[employeecontroller::class, 'edit'])->name('employee.update');
Route::put('employee/{id}/update',[employeecontroller::class, 'update']);
<<<<<<< HEAD
=======
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 333e98162ffa40ea1ea1efc6f93ba930d686c55d

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    Route::get('employee', [\App\Http\Controllers\employeeController::class, 'index'])->name('employee.index');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('employee', [\App\Http\Controllers\employeeController::class, 'index'])->name('employee.index');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
