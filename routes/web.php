<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Us Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Services Page
Route::get('/services', function () {
    return view('services');
})->name('services');

// Contact Us Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Authentication Routes (Frontend Only)
Route::prefix('auth')->name('auth.')->group(function () {
    // Login Page
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    
    // Register Page
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
    
    // Forgot Password Page
    Route::get('/forgot-password', function () {
        return view('auth.forgot-password');
    })->name('forgot-password');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Admin Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');

    // Booking Management
    Route::get('/bookings', function () {
        return view('admin.bookings.index');
    })->name('bookings.index');
    Route::get('/bookings/create', function () {
        return view('admin.bookings.create');
    })->name('bookings.create');
    Route::get('/bookings/edit/{id}', function ($id) {
        return view('admin.bookings.edit', ['id' => $id]);
    })->name('bookings.edit');
    Route::get('/bookings/show/{id}', function ($id) {
        return view('admin.bookings.show', ['id' => $id]);
    })->name('bookings.show');

    // User Management
    Route::get('/users', function () {
        return view('admin.users.index');
    })->name('users.index');
    Route::get('/users/create', function () {
        return view('admin.users.create');
    })->name('users.create');
    Route::get('/users/edit/{id}', function ($id) {
        return view('admin.users.edit', ['id' => $id]);
    })->name('users.edit');

    // Reports & Analytics
    Route::get('/reports', function () {
        return view('admin.reports.index');
    })->name('reports.index');

    // Settings
    Route::get('/settings', function () {
        return view('admin.settings.index');
    })->name('settings.index');
    Route::get('/settings/payment-gateway', function () {
        return view('admin.settings.payment-gateway');
    })->name('settings.paymentGateway');
});