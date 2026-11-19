<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('home');
})->name('home');
// Ammar’s workspace

// مسار عرض كل الفعاليات
Route::get('/events', [EventController::class, 'index'])->name('events.index');

// مسار عرض فورم التسجيل (GET)
Route::get('/events/register', [EventController::class, 'create'])->name('events.register');

// Mohammed’s workspace



// مسار استقبال بيانات الفورم (POST)
Route::post('/events/register', [EventController::class, 'store'])->name('events.store');

// مسار عرض تفاصيل فعالية محددة 
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');

// Ahmed’s workspace
// 3. مسارات الصفحات الثابتة
// لا نحتاج إلى كونترولر فهي static pages
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
