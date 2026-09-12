<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


// 1. Halaman Utama Website SOVEREIGN
Route::get('/', function () {
    return view('home');
});

// Route untuk halaman shop
Route::get('/shop', function () {
    return view('shop');
});

Route::get('/articles-and-reviews', function () {
    return view('articles_and_reviews');
});

Route::post('/reviews', function (\Illuminate\Http\Request $request) {
    return back()->with('success', 'Rating & Review berhasil dikirim!');
})->name('reviews.store');

// Route untuk halaman information
Route::get('/information', function () {
    return view('information');
});

// 2. Form Submit Appointment / Pre-order
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');

// 3. User Dashboard bawaan Breeze (untuk Customer yang Login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 4. Route User Profile (Edit, Update, Delete)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 5. Route Khusus Admin Dashboard (Terproteksi Login & Admin Role)
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::patch('/appointments/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.appointments.updateStatus');
    Route::delete('/appointments/{id}', [AdminController::class, 'destroy'])->name('admin.appointments.destroy');
});

Route::get('/run-migrate', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate --force');
    return 'Migrasi Database Aiven Berhasil!';
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::patch('/appointments/{id}/status', [AdminController::class, 'updateStatus'])->name('appointments.updateStatus');
    Route::delete('/appointments/{id}', [AdminController::class, 'destroy'])->name('appointments.destroy');
});

Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');

Route::get('/create-admin-now', function () {
    $admin = User::updateOrCreate(
        ['email' => 'admin@sovereign.com'],
        [
            'name'     => 'Admin Sovereign',
            'password' => Hash::make('password123'),
            'role'     => 'admin',
        ]
    );

    return "AKUN ADMIN BERHASIL DIBUAT DI AIVEN!<br>Email: <b>{$admin->email}</b><br>Password: <b>password123</b>";
});

require __DIR__.'/auth.php';