<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Models\Employees;

// Route::get('/', function () {
//     return view('pages.home');
// });
Route::get('/', function () {
    $employees = Employees::with(['department', 'position'])->get();
    return view('pages.home', compact('employees'));
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Employees CRUD routes
// Route::get('/employees', [App\Http\Controllers\EmployeesController::class, 'index'])->name('employees.create');
Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');