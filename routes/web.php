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
    
    // pages
    Route::get('/pages', function () {return view('pages.pages.pages');})->name('pages');
    Route::get('/create-page', function () {return view('pages.pages.create-page');})->name('create.page');
    // category & tag management
    Route::get('/categories', function () {return view('pages.category-tag.categories');})->name('categories');
    Route::get('/create-category', function () {return view('pages.category-tag.create-category');})->name('create.category');
    Route::get('/archive-categories', function () {return view('pages.category-tag.archive-categories');})->name('archive.categories');
    Route::get('/tags', function () {return view('pages.category-tag.tags');})->name('tags');
    Route::get('/create-tag', function () {return view('pages.category-tag.create-tag');})->name('create.tag');
    Route::get('/archive-tags', function () {return view('pages.category-tag.archive-tags');})->name('archive.tags');
});


require __DIR__.'/auth.php';
