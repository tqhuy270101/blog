<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\homeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;



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

Route::name('user.')->group(function () {
    Route::get('/', [homeController::class, 'home'])->name('home');
    Route::get('/home', [homeController::class, 'home']);
    Route::get('/about-us', [homeController::class, 'aboutUs'])->name('aboutUs');
    Route::get('/contact-us', [homeController::class, 'contactUs'])->name('contactUs');
    Route::get('/blog', [homeController::class, 'blog'])->name('blog');
    Route::get('/blog/{id}', [homeController::class, 'detailsBlog'])->name('details-blog');
    Route::post('/blog/{id}', [homeController::class, 'postComment'])->name('post-comment');
    Route::get('/search', [homeController::class, 'search'])->name('search');
});

Route::name('admin.')->group(function () {
    Route::name('bai-viet.')->group( function () {
        Route::get('/admin', [adminController::class, 'index'])->name('index');
        Route::get('/admin/xem-bai-viet', [adminController::class, 'xemBaiViet'])->name('xem-bai-viet');
        Route::get('/admin/them-bai-viet', [adminController::class, 'themBaiViet'])->name('them-bai-viet');
        Route::post('/admin/them-bai-viet', [adminController::class, 'themBaiVietF']);
        Route::get('/admin/sua-bai-viet/{id}', [adminController::class, 'suaBaiViet'])->name('sua-bai-viet');
        Route::post('/admin/sua-bai-viet/{id}', [adminController::class, 'suaBaiVietF']);
        Route::get('/admin/xoa-bai-viet/{id}', [adminController::class, 'xoaBaiViet'])->name('xoa-bai-viet');
    });
    Route::get('/login', [loginController::class, 'login'])->name('login');
    Route::post('/login', [loginController::class, 'loginF']);
    Route::get('/logout', [loginController::class, 'logout'])->name('logout');
    Route::get('/register', [loginController::class, 'register'])->name('register');
    Route::post('/register', [loginController::class, 'registerF']);

});

