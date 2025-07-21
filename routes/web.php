<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/* Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/services', function () {
    return view('services'); 
})->name('services');
 */
/*  

Route::post('/contact', [ContactController::class, 'store'])->name('contact.send');

// Admin Panel (Requires Authentication)
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contacts');
    Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');
});
 */
