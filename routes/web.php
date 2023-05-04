<?php

use App\Http\Controllers\SiteController;
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

Route::middleware('revalidate')->group(function () {
    Route::get('/', function () {
        return redirect()->route('login');
    });

    # Guest Admin Login
    Route::middleware('guest')->group(function () {
        Route::get('/login', [SiteController::class, 'login'])->name('login');
        Route::post('/do-login', [SiteController::class, 'doLogin'])->name('dologin');
    });

    # Admin Panel
    Route::prefix('admin')->name('admin.')->group(function () {
        # Admin
        Route::middleware('auth')->group(function () {
            # Dashboard
            Route::get('/dashboard', [SiteController::class, 'adminDash'])->name('admin-dash');

            # Logout
            Route::post('/logout', [SiteController::class, 'adminLogout'])->name('admin-logout');
        });
    });

    # User Panel
    Route::prefix('user')->name('user.')->group(function () {
        # User
        Route::middleware('auth')->group(function () {
            # Dashboard
            Route::get('/dashboard', [SiteController::class, 'userDash'])->name('user-dash');

            # Logout
            Route::post('/logout', [SiteController::class, 'userLogout'])->name('user-logout');
        });
    });
});
