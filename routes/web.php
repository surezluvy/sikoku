<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SoalController;
use App\Http\Controllers\Admin\PaketSoalController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;

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

        Route::prefix('/paketsoal')->group(function () {
            Route::get('/', 'paketsoal')->name('paketsoal');
            Route::get('/detail/{id}', 'detailPaketSoal')->name('detailPaket');
            Route::get('/pilih/{id}', 'pilihPaketSoal')->name('pilihPaket');
        });

        Route::controller(TestController::class)->group(function () {
            Route::prefix('/test')->group(function () {
                Route::get('/', 'index')->name('test');
                Route::get('/detail', 'detail')->name('test-detail');
                Route::get('/validasi', 'validasiSiswa')->name('test-validasi');
                Route::post('/inputToken', 'inputToken')->name('inputToken');

                // Untuk intruksi
                // Route::get('/mulai', 'mulaiTest')->name('test-mulai');
                Route::get('/mulai/{id}', 'mulaiTest')->name('test-mulai');
                Route::post('/mulai/{id}', 'mulaiTest')->name('test-mulai');
                Route::get('/kirimJawaban', 'kirimJawabanTest')->name('test-kirimJawaban');

                // Hapus session
                Route::get('/mulai', 'hapus_session_jawaban_siswa')->name('test-hapusSessionJawabanSiswa');
            });
        });

    });

    Route::middleware(['guest'])->group(function () {

        Route::controller(AuthController::class)->group(function () {
            Route::get('/masuk', 'masuk')->name('masuk');
            Route::post('/masuk', 'prosesMasuk')->name('masuk');

            Route::get('/login', 'login')->name('login');
            Route::post('/login', 'prosesLogin')->name('prosesLogin');

            Route::get('/daftar', 'daftar')->name('daftar');
            Route::post('/daftar', 'prosesDaftar')->name('daftar');
        });

    });

    Route::middleware(['auth'])->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::prefix('/dashboard')->group(function () {
                
                Route::middleware(['isGuru'])->group(function () {
                    Route::get('/', 'index')->name('dashboard');

                    Route::prefix('/paketsoal')->group(function () {
                        Route::get('/', 'paketSoal')->name('dashboard-paketSoal');
                        Route::get('/saya/{id}', 'paketSoalSaya')->name('dashboard-paketSoalSaya');
                        Route::get('/{id}', 'detailPaketSoal')->name('dashboard-detailPaket');
                        Route::get('/{id}/bayar', 'bayarPaketSoal')->name('dashboard-bayarPaket');
                        Route::post('/bayar', 'prosesBayarPaketSoal')->name('dashboard-prosesBayarPaket');
                    });

                    Route::prefix('/batch-ujian')->group(function () {
                        Route::get('/', 'batch')->name('dashboard-batch');
                        Route::get('/detail/{id}', 'detailBatch')->name('dashboard-detailBatch');
                        Route::get('/tambah', 'tambahBatch')->name('dashboard-tambahBatch');
                        Route::post('/tambah', 'prosesTambahBatch')->name('dashboard-prosesTambahBatch');
                    });
                });

                Route::middleware(['isAdmin'])->group(function () {
                    Route::controller(AdminController::class)->group(function () {
                        Route::prefix('/s')->group(function () {
                            Route::get('/', 'index')->name('admin');

                            Route::controller(SoalController::class)->group(function () {
                                Route::prefix('/soal')->group(function () {
                                    Route::get('/{tipe}', 'index')->name('admin-soal');
                                    Route::get('/tambah/{tipe}', 'tambahSoal')->name('admin-tambahSoal');
                                    Route::post('/tambah', 'prosesTambahSoal')->name('admin-prosesTambahSoal');
                                    Route::post('/tambahSoalExcel', 'prosesTambahSoalExcel')->name('admin-prosesTambahSoalExcel');

                                    Route::get('/ubah/{id}/{tipe}', 'ubahSoal')->name('admin-ubahSoal');
                                    Route::post('/ubah', 'prosesUbahSoal')->name('admin-prosesUbahSoal');

                                    Route::get('/ubah-jawaban/{id}/{tipe}', 'ubahJawaban')->name('admin-ubahJawaban');
                                    Route::post('/ubah-jawaban', 'prosesUbahJawaban')->name('admin-prosesUbahJawaban');

                                    Route::get('/tambah-jawaban/{id}/{tipe}', 'tambahJawaban')->name('admin-tambahJawaban');
                                    Route::post('/tambah-jawaban', 'prosesTambahJawaban')->name('admin-prosesTambahJawaban');

                                    Route::get('/hapus/{id}/{tipe}', 'prosesHapusSoal')->name('admin-prosesHapusSoal');
                                });
                            });

                            Route::controller(PaketSoalController::class)->group(function () {
                                Route::prefix('/paket-soal')->group(function () {
                                    Route::get('/', 'index')->name('admin-paketSoal');
                                    Route::get('/detail/{id}', 'detail')->name('admin-detailPaketSoal');

                                    Route::get('/tambah', 'tambahPaketSoal')->name('admin-tambahPaketSoal');
                                    Route::post('/tambah', 'prosesTambahPaketSoal')->name('admin-prosesTambahPaketSoal');

                                    Route::get('/ubah/{id}', 'ubahPaketSoal')->name('admin-ubahPaketSoal');
                                    Route::post('/ubah/{id}', 'prosesUbahPaketSoal')->name('admin-prosesUbahPaketSoal');

                                    Route::get('/hapus/{id}', 'hapusPaketSoal')->name('admin-hapusPaketSoal');
                                    Route::get('/tes-hapus/{id}', 'tesHapusPaketSoal')->name('admin-tesHapusPaketSoal');
                                });
                            });
                        });
                    });
                });

            });
        });

        Route::controller(AuthController::class)->group(function () {
            Route::get('/logout', 'logout')->name('admin-logout');
        });
    });
});
