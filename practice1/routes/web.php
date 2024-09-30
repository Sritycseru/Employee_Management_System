<?php

// use App\Models\Employeep;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     $employees = Employee::all();
//     return view('home')->with("employees",$employee);
// });
Route::get('/', [EmployeeController::class, 'index'])->name('index');
// Route to handle the delete request
Route::post('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::get('/employ/create', [EmployeeController::class, 'create'])->name('employees.create');

Route::post('/employs', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employee/{id}', [EmployeeController::class, 'show'])->name('employees.show');




