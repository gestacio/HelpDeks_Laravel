<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('tickets', App\Http\Controllers\TicketController::class)
->middleware('auth:sanctum');

Route::resource('users', App\Http\Controllers\UserController::class)
->middleware('auth:sanctum');

Route::resource('departments', App\Http\Controllers\DepartmentController::class)
->middleware('auth:sanctum');


// Route::middleware(['auth:sanctum', 'verified'])->get('tickets', function () {
//     return redirect('tickets');
// })->name('tickets');
// Route::middleware(['auth:sanctum', 'verified'])->get('/tickets', function () {
//     return redirect()->route('tickets');
// })->name('tickets');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


// Route::get('/dashboard', function() {
//     return view('tickets.index')
// })->middleware('auth:sanctum');