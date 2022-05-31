<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;

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


Route::prefix('/')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('index');


        Route::middleware(['auth'])->group(function () {
            Route::prefix('/home')->group(function () {
                Route::get('/', 'home')->name('home');
            });

            Route::prefix('/profil')->group(function () {
                Route::get('/', 'profil')->name('profil');
                Route::get('/edit', 'profilEdit')->name('profilEdit');
                Route::post('/edit', 'profilEditProcess')->name('profilEditProcess');
            });
        });

        Route::middleware(['guest'])->group(function () {
            Route::prefix('/paketsoal')->group(function () {
                Route::get('/', 'paketsoal')->name('paketsoal');
                Route::get('/detail/{id}', 'detailPaket')->name('detailPaket');
            });
        });

    });

    Route::controller(AuthController::class)->group(function () {
        Route::middleware(['guest'])->group(function () {
            Route::get('/masuk', 'masuk')->name('masuk');
            Route::post('/masuk', 'prosesMasuk')->name('masuk');
            Route::get('/daftar', 'daftar')->name('daftar');
            Route::post('/daftar', 'prosesDaftar')->name('daftar');
        });
    });
});


// Route::prefix('/profile')->group(function () {
//     Route::controller(HomeController::class)->group(function () {
//         Route::middleware(['auth'])->group(function () {
//             Route::get('/', 'profile')->name('profile');

//             Route::controller(AuthController::class)->group(function () {
//                 Route::post('/logout', 'logout')->name('admin-logout');
//             });
//         });
//     });
// });

// Route::prefix('/dashboard')->group(function () {
//     Route::controller(DashboardController::class)->group(function () {
//         Route::middleware(['auth'])->group(function () {
//             Route::get('/', 'index')->name('admin-dashboard');
//             Route::prefix('/user')->group(function () {
//                 Route::controller(UserController::class)->group(function () {
//                     Route::get('/', 'index')->name('admin-user');
//                 });
//             });
//             Route::post('/logout', 'logout')->name('admin-logout');
//         });
//     });
// });

