<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\ValuationController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\PengaduanController;
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

Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('kategori-fasilitas', App\Http\Controllers\Ref\KategoriFasilitasController::class);
    Route::resource('fasilitas', App\Http\Controllers\Ref\FasilitasController::class);
    Route::resource('jaminan-sosial', App\Http\Controllers\Ref\JaminanSosialController::class);
    Route::resource('lulusan', App\Http\Controllers\Ref\LulusanController::class);
    Route::resource('cuti', App\Http\Controllers\Ref\CutiController::class);
    
    Route::match(['get', 'post'], '/accounts',[AdminController::class,'accounts'])->name('accounts');
});


Route::prefix('office')->name('office.')->group(function(){
    Route::match(['get', 'post'], '/',[PerusahaanController::class,'index'])->name('index');
    Route::get('create', [PerusahaanController::class,'create'])->name('create');
    Route::get('{id}', [PerusahaanController::class,'view'])->name('view');
    Route::post('create', [PerusahaanController::class,'store'])->name('store');
});

Route::prefix('tickets')->name('tickets.')->group(function(){
    Route::match(['get', 'post'], '/',[PengaduanController::class,'index'])->name('index');
    Route::get('create', [PengaduanController::class,'create'])->name('create');
    Route::get('{id}', [PengaduanController::class,'view'])->name('view');
    Route::post('create', [PengaduanController::class,'store'])->name('store');
});