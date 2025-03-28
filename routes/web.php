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

Route::get('login', [UserController::class, 'login'])->name('login');
Route::get('register', [UserController::class, 'register'])->name('register');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
//User Routes
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('about', [UserController::class, 'about_us'])->name('about');
Route::get('contact', [UserController::class, 'contact_us'])->name('contact');
Route::get('shop', [UserController::class, 'shop'])->name('shop');
Route::post('registerstore', [UserController::class, 'registerstore'])->name('registerstore');
Route::post('loginstore', [UserController::class, 'loginstore'])->name('loginstore');
Route::get('contactstore', [UserController::class, 'contactstore'])->name('contactstore');



//User-Backoffice Routes 
Route::group(['middleware' => 'IsUser'], function () {
    Route::prefix('backoffice')->group(function () {
        Route::get('/home', [BackOfficeController::class, 'index'])->name('backoffice-home');
        Route::get('/about', [BackOfficeController::class, 'about_us'])->name('backoffice-about');
        Route::get('/contact', [BackOfficeController::class, 'contact_us'])->name('backoffice-contact');
        Route::get('/book/post', [BackOfficeController::class, 'createpost'])->name('backoffice-post-book');
        Route::post('/book/store', [BackOfficeController::class, 'store']);
        Route::get('/shop', [BackOfficeController::class, 'shop'])->name('backoffice-shop');
        Route::get('/search-by-category/{id}', [BackOfficeController::class, 'book_by_category']);
        Route::get('/book-details/{id}', [BackOfficeController::class, 'book_details']);
        
        Route::get('/logout', [BackOfficeController::class, 'logout'])->name('backoffice-logout');
    });
});




//Admin Routes
Route::group(['middleware' => 'IsAdmin'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/home', [AdminController::class, 'index'])->name('admin-home');
        Route::get('/books-list', [AdminController::class, 'books_list'])->name('admin-books-list');
        Route::get('/manage-posts', [AdminController::class, 'manage_post'])->name('admin-manage-post');
        Route::get('/messages', [AdminController::class, 'messages'])->name('admin-messages');

        Route::get('/total-sales', [AdminController::class, 'total_sales'])->name('admin-total-sales');
        //Block user
        Route::get('/block-user', [AdminController::class, 'block_user'])->name('admin-block-user');
        Route::get('/update-block-user/{id}', [AdminController::class, 'update_block_user']);
        //Users Routes
        Route::get('/user-list', [AdminController::class, 'user_list'])->name('admin-user-list');
        Route::get('/delete-user/{id}', [AdminController::class, 'delete_user']);
        //Profile routes
        Route::get('/profile', [AdminController::class, 'profile'])->name('admin-profile');
        Route::post('/update-profile/{id}', [AdminController::class, 'update_data']);
        Route::post('/update-password/{id}', [AdminController::class, 'update_password']);
        //Report Users
        Route::get('/report-user', [AdminController::class, 'report_user'])->name('admin-report-user');
        Route::post('/send-notice/{id}', [AdminController::class, 'send_notice']);
        //Category Routes
        Route::get('/add/category', [AdminController::class, 'add_category'])->name('admin-add-category');
        Route::get('/category-list', [AdminController::class, 'category_list'])->name('admin-manage-category');
        Route::post('/Category_Store', [AdminController::class, 'Category_Store']);

        // Route::get('/update-block-user/{id}', [AdminController::class, 'update_block_user']);  
        // Route::get('/delete-user/{id}', [AdminController::class, 'delete_user']);
    });
});
