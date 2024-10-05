<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 

        

        Route::get('/signup' , [UserController::class , 'create'])->name('register');
        Route::get('/login' , [UserController::class , 'login'])->name('login');
        Route::get('/index' , [UserController::class , 'index'])->name('user.index')->middleware('auth');
        Route::post('/users/authenticate' , [UserController::class , 'authenticate'])->name('authenticate');
        Route::post('/users' , [UserController::class , 'store'])->name('store_user');
        Route::get('/logout' , [UserController::class , 'logout'])->name('logout')->middleware('auth');


    });


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




Route::get('students/create',[StudentController::class,'create']);
Route::post('students',[StudentController::class,'store'])->name('students.store');
Route::get('/students' , [StudentController::class , 'index'])->name('students.index');

