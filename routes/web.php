<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ColaboratorController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\TypePayController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');
Route::get('customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');

Route::get('colaborators', [ColaboratorController::class, 'index'])->name('colaborators.index');
Route::get('colaborators/create', [ColaboratorController::class, 'create'])->name('colaborators.create');
Route::post('colaborators', [ColaboratorController::class, 'store'])->name('colaborators.store');
Route::get('colaborators/{colaborator}', [ColaboratorController::class, 'show'])->name('colaborators.show');
Route::get('colaborators/{colaborator}/edit', [ColaboratorController::class, 'edit'])->name('colaborators.edit');
Route::put('colaborators/{colaborator}', [ColaboratorController::class, 'update'])->name('colaborators.update');
Route::delete('colaborators/{colaborator}', [ColaboratorController::class, 'destroy'])->name('colaborators.destroy');

Route::get('pays', [PayController::class, 'index'])->name('pays.index');
Route::get('pays/create', [PayController::class, 'create'])->name('pays.create');
Route::post('pays', [PayController::class, 'store'])->name('pays.store');
Route::get('pays/{pay}', [PayController::class, 'show'])->name('pays.show');
Route::get('pays/{pay}/edit', [PayController::class, 'edit'])->name('pays.edit');
Route::put('pays/{pay}', [PayController::class, 'update'])->name('pays.update');
Route::delete('pays/{pay}', [PayController::class, 'destroy'])->name('pays.destroy');

Route::get('typepays', [TypePayController::class, 'index'])->name('typepays.index');
Route::get('typepays/create', [TypePayController::class, 'create'])->name('typepays.create');
Route::post('typepays', [TypePayController::class, 'store'])->name('typepays.store');
Route::get('typepays/{typepay}', [TypePayController::class, 'show'])->name('typepays.show');
Route::get('typepays/{typepay}/edit', [TypePayController::class, 'edit'])->name('typepays.edit');
Route::put('typepays/{typepay}', [TypePayController::class, 'update'])->name('typepays.update');
Route::delete('typepays/{typepay}', [TypePayController::class, 'destroy'])->name('typepays.destroy');
