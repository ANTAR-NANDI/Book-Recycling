<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Backofice\BackOfficeController;
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

// Route::get('/', function () {
//     return view('User.pages.index');
// });
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('about', [UserController::class, 'about_us'])->name('about');
Route::get('contact', [UserController::class, 'contact_us'])->name('contact');
Route::get('shop', [UserController::class, 'shop'])->name('shop');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::get('register', [UserController::class, 'register'])->name('register');
Route::get('product-details', [UserController::class, 'productdetails'])->name('product-details');
Route::prefix('backoffice')->group(function () {

    //User-Backoffice Routes 
    Route::get('/home', [BackOfficeController::class, 'index'])->name('backoffice-home');
    Route::get('/about', [BackOfficeController::class, 'about_us'])->name('backoffice-about');
    Route::get('/contact', [UserController::class, 'contact_us'])->name('backoffice-contact');
    Route::get('/shop', [BackOfficeController::class, 'shop'])->name('backoffice-shop');
    Route::get('/logout', [BackOfficeController::class, 'logout'])->name('backoffice-logout');
});
