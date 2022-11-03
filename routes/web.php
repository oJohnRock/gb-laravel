<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::name('news')->prefix('news')->group(function () {
    Route::get('/', [NewsController::class, 'index']);
    Route::get('/{id}', [NewsController::class, 'newsOne'])->name('One');
    // Route::get('/add', [NewsController::class, 'newsAdd'])->name('Add');
});

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoriesController::class, 'index'])->name('categories');
    Route::get('/{id}', [CategoriesController::class, 'newsByCategoryId'])->name('categoryNews');
});

Route::get('/auth', [AuthController::class, 'index'])->name('auth');

Route::fallback(function () {
    return view('404');
});
