<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/assigned-ticket', function () {return view('pages.assigned-ticket');})->middleware(['auth', 'verified'])->name('assigned.ticket');
    Route::get('/new-ticket', function () {return view('pages.new-ticket');})->middleware(['auth', 'verified'])->name('new.ticket');
    Route::get('/all-ticket', function () {return view('pages.all-ticket');})->middleware(['auth', 'verified'])->name('all.ticket');
    Route::get('/open-ticket', function () {return view('pages.open-ticket');})->middleware(['auth', 'verified'])->name('open.ticket');
    Route::get('/pending-ticket', function () {return view('pages.pending-ticket');})->middleware(['auth', 'verified'])->name('pending.ticket');
    Route::get('/close-ticket', function () {return view('pages.close-ticket');})->middleware(['auth', 'verified'])->name('close.ticket');
});


require __DIR__.'/auth.php';
