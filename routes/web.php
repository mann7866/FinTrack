<?php

use App\Models\FinanceLog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FinanceLogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/log', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('log');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::controller(AllController::class)->prefix('dashboard')->group(function(){
        route::get('/','dashboard')->name('dashboard');
    });

    // category route
    Route::controller(CategoryController::class)->prefix('/category')->name('category.')->group(function(){
        route::get('/','index')->name('index');
        route::post('/store','store')->name('store');
        route::put('/{category}/update','update')->name('update');
        route::delete('/{category}/destroy','destroy')->name('destroy');
    });

    // finance log route
    Route::controller(FinanceLogController::class)->prefix('/finance-logs')->name('finance.log.')->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/load','load')->name('load');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/{financeLog}/edit','edit')->name('edit');
        Route::put('/{financeLog}/update','update')->name('update');
        Route::delete('/{financeLog}/destroy','destroy')->name('destroy');
    });

});

require __DIR__.'/auth.php';
