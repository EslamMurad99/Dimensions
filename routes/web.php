<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

// ✅ الواجهة الأمامية
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');

// ✅ لوحة تحكم الأدمن (Admin Panel)
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Projects
    Route::resource('projects', ProjectController::class);

    // Services
    Route::resource('services', ServiceController::class);

    // Contacts
    Route::resource('contacts', ContactController::class);
});

// ✅ إعدادات البروفايل للمستخدم
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// موجودة تلقائيًا لو انت مستخدم auth scaffolding
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


// Health check for Railway
Route::get('/health', function () {
    return response()->json([
        'status' => 'healthy',
        'timestamp' => now(),
        'environment' => app()->environment(),
        'version' => app()->version()
    ]);
});

// Debug route to check database connection
Route::get('/debug', function () {
    try {
        $services = \App\Models\Service::all();
        return response()->json([
            'status' => 'success',
            'services_count' => $services->count(),
            'database_connected' => true
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
            'database_connected' => false
        ]);
    }
});

// ✅ مصادقة Laravel Breeze
require __DIR__ . '/auth.php';
