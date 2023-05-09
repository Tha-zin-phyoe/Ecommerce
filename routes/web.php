<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Admin

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', [DashboardController::class,'index']);
    // Category
    Route::resource('/categories',CategoryController::class);


});

