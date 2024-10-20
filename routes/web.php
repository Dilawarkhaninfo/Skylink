<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
*/

// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Resend Confirmation Page
Route::get('/resendconformation', function () {
    return view('resendconformation');
})->name('resendconformation');

// Car Hire Page
Route::get('/carhire', function () {
    return view('carhire');
})->name('carhire');

// FAQ Page
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// My Booking Page
Route::get('/mybooking', function () {
    return view('mybooking');
})->name('mybooking');

// Contact Us Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Contact Us Page
Route::get('/bookingform', function () {
    return view('bookingform');
})->name('bookingform');

// Contact Us Page
Route::get('/carservice', function () {
    return view('carservice');
})->name('carservice');

// Airport Page
Route::get('/airport', function () {
    return view('airport');
})->name('airport');

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
    Route::get('/users/show/{id}', function ($id) {
        return view('admin.users.show', ['id' => $id]);
    })->name('users.show');

    // User Management (Adding the missing route)
    Route::get('/users-management', function () {
        return view('admin.users-management.index'); // Adjust the view path as needed
    })->name('user-management.index');

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

    // Car Availability per Airport
    Route::get('/cars', function () {
        return view('admin.cars.index');
    })->name('cars.index');

    // Pricing and Payment Management
    Route::get('/pricing', function () {
        return view('admin.pricing.index');
    })->name('pricing.index');

    // Notifications & Alerts
    Route::get('/notifications', function () {
        return view('admin.notifications.index');
    })->name('notifications.index');

    // Calendar View for Bookings
    Route::get('/calendar', function () {
        return view('admin.calendar.index');
    })->name('calendar.index');

    // Refund and Cancellation Management
    Route::get('/refunds', function () {
        return view('admin.refunds.index');
    })->name('refunds.index');

    // Two-Factor Authentication
    Route::get('/two-factor-auth', function () {
        return view('admin.two-factor-auth.index');
    })->name('two-factor-auth.index');

    // Live Chat
    Route::get('/chat', function () {
        return view('admin.chat.index');
    })->name('chat.index');
});