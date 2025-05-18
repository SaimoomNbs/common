<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware('auth')->group(function () {
    Route::get('/', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard', function () {return view('dashboard');});
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // ticket supervision
    Route::get('/assigned-ticket', function () {return view('pages.ticket.assigned-ticket');})->name('assigned.ticket');
    Route::get('/new-ticket', function () {return view('pages.ticket.new-ticket');})->name('new.ticket');
    Route::get('/all-ticket', function () {return view('pages.ticket.all-ticket');})->name('all.ticket');
    Route::get('/open-ticket', function () {return view('pages.ticket.open-ticket');})->name('open.ticket');
    Route::get('/pending-ticket', function () {return view('pages.ticket.pending-ticket');})->name('pending.ticket');
    Route::get('/close-ticket', function () {return view('pages.ticket.close-ticket');})->name('close.ticket');
    
    // user management
    Route::get('/user-management', function () {return view('pages.user.user-management');})->name('user.management');
    Route::get('/new-user', function () {return view('pages.user.new-user');})->name('new.user');
    Route::get('/user-role-permission', function () {return view('pages.user.user-role-permission');})->name('user.role.permission');
    Route::get('/banned-user', function () {return view('pages.user.banned-user');})->name('banned.user');
});


require __DIR__.'/auth.php';
