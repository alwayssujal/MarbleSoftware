<?php

use App\Http\Controllers\EmployeeCategoryController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/employees', EmployeesController::class);

Route::resource('/employees_category', EmployeeCategoryController::class);

Route::resource('/customer', CustomerController::class);
