<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;


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

Route::get('/fix-admin-role', function () {
    $user = \App\Models\User::where('email', 'admin@sovereign.com')->first();
    
    if ($user) {
        $user->update([
            'role' => 'admin',
            'password' => \Illuminate\Support\Facades\Hash::make('password123'),
        ]);
        return "Role akun admin@sovereign.com BERHA~~SIL diubah menjadi ADMIN!";
    }

    // Jika akun belum ada sama sekali di DB Aiven, otomatis buatkan baru sebagai admin:
    $newAdmin = \App\Models\User::create([
        'name'     => 'Admin Sovereign',
        'email'    => 'admin@sovereign.com',
        'password' => \Illuminate\Support\Facades\Hash::make('password123'),
        'role'     => 'admin',
    ]);

    return "Akun Admin Baru BERHASIL dibuat di Aiven!<br>Email: admin@sovereign.com<br>Role: admin";
});

require __DIR__.'/auth.php';