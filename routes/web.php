<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faculty', function () { return view('/faculty'); });
Route::get('/classes', function () { return view('/classes'); });
Route::get('/schedule', function () { return view('/schedule'); });
Route::get('/competitive-company', function () { return view('/competitive-company'); });
Route::get('/parent-portal', function () { return view('/parent-portal'); });
Route::get('/contact', function () { return view('/contact'); });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('contact', 'App\Http\Controllers\ContactUsController@create')->name('contact.create');
Route::post('contact', 'App\Http\Controllers\ContactUsController@store')->name('contact.store');
