<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
// handle views and routing
Route::view('/', 'pages.home', ['name' => 'HOME | Dr. Dickson Osei-Asibey'])->name('home');
Route::view('/portfolio', 'pages.portfolio', ['title' => 'PORTFOLIO | DR. DICKSON OSEI-ASIBEY'])->name('portfolio');
Route::view('/agenda', 'pages.agenda', ['title' => 'AGENDA | DR. DICKSON OSEI-ASIBEY'])->name('agenda');
Route::view('/join', 'pages.join', ['title' => 'JOIN | DR. DICKSON OSEI-ASIBEY'])->name('join');
Route::view('/news', 'pages.news', ['title' => 'NEWS | DR. DICKSON OSEI-ASIBEY'])->name('news');
Route::view('/issues', 'pages.issues', ['title' => 'ISSUES | DR. DICKSON OSEI-ASIBEY'])->name('issues');
Route::get('/news/{url}', [AdminController::class, 'handleNewsPage'])->name('news.page');
Route::get('/search', [AdminController::class,'searchNews']);
Route::view('/mail', 'admin.mail.reset-password' , ['code'=>'445565']);

// handle posts requests
Route::controller(AppController::class)->group(function () {
    Route::post('/join', 'handleJoin')->name('member.join');
    Route::post('/message', 'handleMessages');
});
// admin: auth,views,routes
Route::redirect('/admin', 'admin/dashboard');
Route::view('/admin/login', 'admin.login', ['title' => 'LOGIN | ADMIN'])->name('login');
Route::view('/admin/auth/signup', 'admin.save', ['title' => 'SIGNUP | ADMIN'])->name('signup');
Route::view('/admin/forget-password', 'admin.password-reset.forgot', ['title' => 'ADMIN | FORGOT PASSWORD'])->name('forget.password');
Route::view('/admin/reset-password', 'admin.password-reset.reset', ['title' => 'ADMIN | RESET PASSWORD'])->name('reset.password');
Route::post('/admin/forget-password', [AdminController::class, 'handleResetPasswordLink']);
Route::post('/admin/reset-password', [AdminController::class, 'handleResetPassword']);
Route::post('/admin/auth/signup', [AdminController::class, 'handleSave']);
Route::post('/admin/login', [AdminController::class, 'handleLogin']);

Route::controller(AdminController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/admin/dashboard', 'dashboard')->name('dashboard');
        Route::get('/admin/volunteers', 'handleVolunteers')->name('volunteers');
        Route::get('/admin/messages', 'handleMessages')->name('messages');
        Route::get('/admin/events', 'handleEvents')->name('events');
        Route::get('/admin/settings', 'handleSettings')->name('settings');
        Route::get('/admin/news', 'handleNews')->name('admin.news');
        Route::post('/admin/news/{id}/delete', 'deleteNews');
        Route::post('/admin/logout', 'handleLogout')->name('logout');
        Route::post('/post-news', 'handlePostNews');
        Route::view('/admin/site-settings', 'admin.site', ['title'=>'ADMIN | SITE MANAGEMENT'])->name('site.settings');
        Route::post('/admin/site-settings', 'handleSiteSettings');
    });
});
