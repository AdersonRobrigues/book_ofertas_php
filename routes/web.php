<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\BookVmController;
use App\Http\Controllers\Admin\BookCMController;
use App\Http\Controllers\Admin\BookVController;
use App\Http\Controllers\Admin\ViewsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layouts/main', [ViewsController::class, 'homeView'])->name('layouts.main.homeview');

Route::post('/layouts/main', [BookController::class, 'store'])->name('layouts.main.store');
Route::post('/layouts/modalvenda', [BookVController::class, 'store'])->name('layouts.modalV.store');
Route::post('/layouts/modalvendamercado', [BookVMController::class, 'store'])->name('layouts.modalVenda.store');
Route::post('/layouts/modalcompramercado', [BookCMController::class, 'store'])->name('layouts.modalCmercado.store');

Route::Get('/layouts/edit/{id}', [BookController::class, 'editar'])->name('layouts.edit.editar');
Route::Get('/layouts/editV/{id}', [BookVController::class, 'editar'])->name('layouts.edit.editar');
Route::Get('/layouts/editCM/{id}', [BookCMController::class, 'editar'])->name('layouts.edit.editar');
Route::Get('/layouts/editVm/{id}', [BookVmController::class, 'editar'])->name('layouts.edit.editar');


Route:: Put('/layouts/update/{id}',[BookController::class,'update'])->name('layouts.update.update');
Route:: Put('/layouts/updateV/{id}',[BookVController::class,'update'])->name('layouts.update.update');
Route:: Put('/layouts/updateCM/{id}',[BookCMController::class,'update'])->name('layouts.update.update');
Route:: Put('/layouts/updateVm/{id}',[BookVmController::class,'update'])->name('layouts.update.update');


Route::delete('/layouts/main/{id}', [BookController::class, 'destroy'])->name('layouts.main.destroy');
Route::delete('/layouts/modalvenda/{id}', [BookVController::class, 'destroy'])->name('layouts.modalV.destroy');
Route::delete('/layouts/modalvendamercado/{id}', [BookVMController::class, 'destroy'])->name('layouts.modalVenda.destroy');
Route::delete('/layouts/modalcompramercado/{id}', [BookCMController::class, 'destroy'])->name('layouts.modalCmercado.destroy');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
