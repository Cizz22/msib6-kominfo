<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [\App\Http\Controllers\FormController::class, 'index'])->name('form.index');
Route::post('/form', [\App\Http\Controllers\FormController::class, 'submit'])->name('form.submit');
Route::get('/form/success', [\App\Http\Controllers\FormController::class, 'success'])->name('form.success');

Route::get('/report', [\App\Http\Controllers\ReportController::class, 'index'])->name('report.index');
