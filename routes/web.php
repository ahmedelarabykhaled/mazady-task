<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EmployeeController::class, 'index']);
Route::get('/filtered-employees', [EmployeeController::class, 'filtered_employees'])->name('employees.filtered');
