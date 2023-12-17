<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\ValuationController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\SubcriteriaController;

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
    return redirect('login');
});

Auth::routes();

Route::get('logout',[HomeController::class,'logout'])->name('logout');
Route::get('/',[HomeController::class,'index'])->name('home');

// admin
Route::match(['get', 'post'], '/account-verification',[AdminController::class,'accountVerification'])->name('account-verification');
Route::match(['get', 'post'], '/data-verification',[AdminController::class,'dataVerification'])->name('data-verification');

// perusahaan
Route::match(['get', 'post'], '/data-input',[PerusahaanController::class,'dataInput'])->name('data-input');