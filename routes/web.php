<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BookVController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/layouts/main', [BookController::class, 'homeView'])->name('layouts.main.homeview');
Route::post('/layouts/main', [BookController::class, 'store'])->name('layouts.main.store');

Route::get('/layouts/modalvendamercado', [BookVController::class, 'homeView'])->name('layouts.modalVmercado.homeview');
Route::post('/layouts/modalvendamercado', [BookVController::class, 'store'])->name('layouts.modalVmercado.store');

Route::get('/layouts/modalcompramercado', [BookCMController::class, 'homeView'])->name('layouts.modalCmercado.homeview');
Route::post('/layouts/modalcompramercado', [BookCMController::class, 'store'])->name('layouts.modalCmercado.store');


Route::post('/layouts/main/delete', [BookController::class, 'delete']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
