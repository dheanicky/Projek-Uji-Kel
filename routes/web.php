<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LetterTypeController;


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
    return view('home');
});

//staff
Route::prefix('/staff')->name('staff.')->group(function(){
    Route::get('/', [StaffController::class, 'index'])->name('index');
    Route::get('/create', [StaffController::class, 'create'])->name('create');
    Route::post('/store', [StaffController::class, 'store'])->name('store');
    Route::get('/id/{id}', [StaffController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [StaffController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [StaffController::class, 'destroy'])->name('delete');
});

//guru
Route::prefix('/guru')->name('guru.')->group(function(){
    Route::get('/', [GuruController::class, 'index'])->name('index');
    Route::get('/create', [GuruController::class, 'create'])->name('create');
    Route::post('/store', [GuruController::class, 'store'])->name('store');
    Route::get('/id/{id}', [GuruController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [GuruController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [GuruController::class, 'destroy'])->name('delete');
});

//Kalasifikasi surat
Route::prefix('/letterType')->name('letterType.')->group(function(){
    Route::get('/', [LetterTypeController::class, 'index'])->name('index');
    Route::get('/create', [LetterTypeController::class, 'create'])->name('create');
    Route::post('/store', [LetterTypeController::class, 'store'])->name('store');
    Route::get('/id/{id}', [LetterTypeController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [LetterTypeController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [LetterTypeController::class, 'destroy'])->name('delete');
});



