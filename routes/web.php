<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;


// ✅ الصفحة الرئيسية
Route::get('/', function () {
    return view('index');
})->name('home');

// ✅ باقي الصفحات
Route::get('/about', function () {
    return view('about');
})->name('about');

 Route::get('/contacts', function () {
    return view('contact');
})->name('contacts');
 

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/services', function () {
    return view('services');
})->name('services');

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
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');

    // Services
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');

    // Contacts
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

/* Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');
Route::post('/admin/contacts', [ContactController::class, 'store'])->name('contacts.store'); 
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.submit');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact.form');
 */

// ✅ مصادقة Laravel Breeze
require __DIR__.'/auth.php';
