<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;
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

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticationController::class, 'index'])->name('login');
    Route::post('login', [AuthenticationController::class, 'create'])->name('auth.create');
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('home');
    Route::post('logout', [AuthenticationController::class, 'destroy'])->name('auth.destroy');

    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::resource('departments', DepartmentController::class);
});
