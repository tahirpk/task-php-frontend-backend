<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::prefix('backend')->group(function () {
    Route::get('/', function () {
        return view('backend.welcome');
    });
});

Route::get('/applications', [App\Http\Controllers\Admin\ApplicationController::class,'index'])->name('applications');
Route::get('/admin-dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
Route::get('/edit/{id}', [App\Http\Controllers\Admin\ApplicationController::class,'edit'])->name('edit');
Route::post('approval/{id}',[App\Http\Controllers\Admin\ApplicationController::class,'approval'])->name('approval');
Route::post('/destroy', [App\Http\Controllers\Admin\ApplicationController::class,'destroy'])->name('destroy');
Route::post('/update', [App\Http\Controllers\Admin\ApplicationController::class,'update'])->name('update');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
