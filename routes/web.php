<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Backofice\BackOfficeController;
use App\Http\Controllers\Admin\AdminController;
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

//Public Routes
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('about', [UserController::class, 'about_us'])->name('about');
Route::get('contact', [UserController::class, 'contact_us'])->name('contact');
Route::get('shop', [UserController::class, 'shop'])->name('shop');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('registerstore', [UserController::class, 'registerstore'])->name('registerstore');
Route::post('loginstore', [UserController::class, 'loginstore'])->name('loginstore');
Route::get('contactstore', [UserController::class, 'contactstore'])->name('contactstore');

//User-Backoffice Routes 
Route::prefix('backoffice')->group(function () {
    Route::get('/home', [BackOfficeController::class, 'index'])->name('backoffice-home');
    Route::get('/about', [BackOfficeController::class, 'about_us'])->name('backoffice-about');
    Route::get('/contact', [BackOfficeController::class, 'contact_us'])->name('backoffice-contact');
    Route::get('/shop', [BackOfficeController::class, 'shop'])->name('backoffice-shop');
    Route::get('/logout', [BackOfficeController::class, 'logout'])->name('backoffice-logout');
});
Route::prefix('admin')->group(function () {

    //Admin Routes 
    Route::get('/home', [AdminController::class, 'index'])->name('admin-home');
});
