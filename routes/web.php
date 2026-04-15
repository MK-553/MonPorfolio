<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin Routes (Libre d'accès pour le moment)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('projects', App\Http\Controllers\Admin\ProjectController::class);
    Route::resource('skills', App\Http\Controllers\Admin\SkillController::class);
    
    Route::get('messages', [App\Http\Controllers\Admin\MessageController::class, 'index'])->name('messages.index');
    Route::delete('messages/{contact}', [App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('messages.destroy');
});
