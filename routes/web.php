<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Route::get('companies', [CompanyController::class, 'index'])->name('companies.index');
Route::get('companies/create', [CompanyController::class, 'create'])->name('companies.create');
Route::get('companies/{company}', [CompanyController::class, 'show'])->name('companies.show');
Route::get('companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
Route::put('companies/{company}', [CompanyController::class, 'update'])->name('companies.update');
Route::post('companies', [CompanyController::class, 'store'])->name('companies.store');
Route::delete('companies/{company}', [CompanyController::class, 'destroy'])->name('companies.destroy');


Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

