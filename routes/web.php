<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::get('employee/show/{e_id}', [EmployeeController::class, 'show'])->name('employees.show');
Route::get('employee/edit/{e_id}', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::post('employee/update', [EmployeeController::class, 'update'])->name('employees.update');
Route::post('employee/store', [EmployeeController::class, 'store'])->name('employees.store');
Route::post('employee/delete', [EmployeeController::class, 'destroy'])->name('employees.destroy');
