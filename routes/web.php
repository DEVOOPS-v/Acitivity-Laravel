<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Employees CRUD routes
Route::get('/employees', [App\Http\Controllers\EmployeesController::class, 'index'])->name('employees.create');