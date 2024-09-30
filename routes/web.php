<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::controller(App\Http\Controllers\UserController::class)->name('auth.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/signin', 'signin')->name('signin');
        Route::get('/signup', 'signup')->name('signup');
        Route::get('/signup/verification/{email}/{token}', 'verify')->name('account-verification');
        Route::get('/forget', 'forgotPassword')->name('forgot');
        Route::get('/changepassword/{email}/{token}', 'changePassword')->name('change');
        Route::middleware('post.method')->group(function () {
            Route::post('/register', 'register')->name('register');
            Route::post('/send-mail', 'sendMailChangePassword')->name('send-mail');
            Route::post('/changepassword/run/{email}', 'change')->name('changepassword');
            Route::post('/login', 'login')->name('login');
        });
    });
    Route::get('/logout', 'logout')->name('logout')->middleware('auth');
});

Route::middleware(['auth', 'admin'])->controller(App\Http\Controllers\Dashboard::class)->name('dashboard.')->group(function () {
    Route::get('/dashboard', 'index')->name('index');
    Route::get('/dashboard/package', 'package')->name('package');
    Route::post('/dashboard/package', 'postPackage')->name('add-package');
    Route::get('/dashboard/blog', 'blog')->name('blog');
    Route::post('/dashboard/blog', 'postblog')->name('blogpost');
    Route::get('/dashboard/artikel/delete/{id}', 'deleteArtikel')->name("delete-article");
    Route::get('/dashboard/paket/delete/{id}', 'deletePaket')->name('delete-activity');
    Route::get('/dashboard/user/delete/{id}', 'deleteUser')->name('delete-user');
    Route::get('/dashboard/package/{id}', 'formUpdatePackage')->name('form-update-activity');
    Route::post('/dashboard/package/update/{id}', 'updatePackage')->name('update-activity');
    Route::get('/dashboard/blog/{id}', 'formUpdateBlog')->name('form-update-article');
    Route::post('/dashboard/blog/update/{id}', 'updateBlog')->name('update-article');
});

Route::controller(App\Http\Controllers\Travel::class)->name('main.')->group(function () {
    Route::get('/home', 'index')->name('index');
    Route::get('/activity', 'activity')->name('activity');
    Route::get('/article', 'article')->name('article');
    Route::get('/about-us', 'about')->name('about-us');
    Route::get('/activity/{id}', 'activityShow')->name('activity.show');
    Route::get('/article/{id}', 'articleShow')->name('article.show');
    Route::get('/booking', 'booking')->middleware(['auth'])->name('booking');
    Route::post('/search', 'search')->name('search');
});
Route::get('/', function () {
    return redirect()->route('main.index');
});
