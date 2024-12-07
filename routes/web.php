<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/admin', [Admin\DashboardController::class, 'index'])->name('dashboard');

Route::prefix('admin')->name('dashboard.')->group(function () {
    Route::get('/edit-content', [Admin\ContentController::class, 'edit'])->name('content.edit');
    Route::post('/admin/edit-content', [Admin\ContentController::class, 'update'])->name('content.update');
});