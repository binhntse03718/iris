<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class, 'viewHome'])->name('homepage');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'viewDashBoard'])->name('dashboard');
    Route::post('/upload-image', [AdminController::class, 'saveSlide'])->name('upload-image');
    Route::post('/upload-description', [AdminController::class, 'saveDescription'])->name('upload-description');
    Route::post('/upload-partner', [AdminController::class, 'savePartner'])->name('upload-partner');
    Route::post('/upload-social', [AdminController::class, 'saveSocial'])->name('upload-social');
    Route::post('/create-partner', [AdminController::class, 'createPartner'])->name('create-partner');
    Route::post('/delete-partner', [AdminController::class, 'deletePartner'])->name('delete-partner');
});

require __DIR__ . '/auth.php';
