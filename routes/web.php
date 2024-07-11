<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductInController;
use App\Http\Controllers\ProductOutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\IssueController;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Product In
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('products_in')->group(function () {
        Route::get('', [ProductInController::class, 'index'])->name('products_in');
        Route::get('create', [ProductInController::class, 'create'])->name('products_in.create');
        Route::post('store', [ProductInController::class, 'store'])->name('products_in.store');
        Route::get('show/{id}', [ProductInController::class, 'show'])->name('products_in.show');
        Route::get('edit/{id}', [ProductInController::class, 'edit'])->name('products_in.edit');
        Route::put('edit/{id}', [ProductInController::class, 'update'])->name('products_in.update');
        Route::delete('destroy/{id}', [ProductInController::class, 'destroy'])->name('products_in.destroy');
        Route::get('productsStockPrint', [ProductInController::class, 'productStockPrintPDF'])->name('products_in.productsStockPrint');
        Route::get('total-print', [ProductInController::class, 'totalProductsPrintPDF'])->name('products_in.totalProductsPrint');
    });

    // Product Out
    Route::prefix('products_out')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('', [ProductOutController::class, 'index'])->name('products_out');
        Route::get('create', [ProductOutController::class, 'create'])->name('products_out.create');
        Route::post('store', [ProductOutController::class, 'store'])->name('products_out.store');
        Route::get('show/{id}', [ProductOutController::class, 'show'])->name('products_out.show');
        Route::get('edit/{id}', [ProductOutController::class, 'edit'])->name('products_out.edit');
        Route::put('edit/{id}', [ProductOutController::class, 'update'])->name('products_out.update');
        Route::delete('destroy/{id}', [ProductOutController::class, 'destroy'])->name('products_out.destroy');
        Route::get('productsOutcomePrint', [ProductOutController::class, 'productOutPrintPDF'])->name('products_out.productsOutPrint');
        Route::get('total-print', [ProductOutController::class, 'totalProductsOutPrintPDF'])->name('products_out.totalProductsOutPrint');
    });

    // Task
    // Issues
    Route::resource('issues', IssueController::class)->except(['show']);
    Route::get('issues/print', [IssueController::class, 'allIssuesPrintPDF'])->name('issues.print');
    
    

    // FailOver: Comming Soon
    // code

    // Clients
    Route::resource('clients', ClientController::class);
    // Route::prefix('clients')->group(function () {
    //     Route::get('', [ClientController::class, 'index'])->name('clients.index');
    //     Route::get('create', [ClientController::class, 'create'])->name('clients.create');
    //     Route::post('store', [ClientController::class, 'store'])->name('clients.store');
    //     Route::get('show/{id}', [ClientController::class, 'show'])->name('clients.show');
    //     Route::get('edit/{id}', [ClientController::class, 'edit'])->name('clients.edit');
    //     Route::put('edit/{id}', [ClientController::class, 'update'])->name('clients.update');
    //     Route::delete('destroy/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');
    // });

    // Documentation: Cooming Soon
    // code

    // Profile
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
});

// Route::middleware(['auth', 'CheckLevel:admin'])->group(function () {
//     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });