<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FinanceLogController;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[AllController::class,'dashboard'])->name('dashboard');

    Route::prefix('/transaction')->group(function(){
        Route::get('/finance/logs', [FinanceLogController::class,'index'])->name('finance.log.index');
        Route::get('/finance/logs/{financeLog}/show', [FinanceLogController::class,'show'])->name('finance.log.show');
        Route::get('/finance/logs/create', [FinanceLogController::class,'create'])->name('finance.log.create');
        Route::post('/finance/logs', [FinanceLogController::class,'store'])->name('finance.log.store');
        Route::get('/finance/logs/{financeLog}/edit', [FinanceLogController::class,'edit'])->name('finance.log.edit');
        Route::put('/finance/logs/{financeLog}', [FinanceLogController::class,'update'])->name('finance.log.update');
        Route::delete('/finance/logs/{financeLog}/delete', [FinanceLogController::class,'destroy'])->name('finance.log.destroy');
    });

Route::get('/category&metode/page',[CategoryController::class,'index'])->name('category.index');
