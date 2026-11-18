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




// Ahmed’s workspace