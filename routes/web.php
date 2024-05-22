<?php

use App\Http\Controllers\ProfileController;
<<<<<<< HEAD
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
=======
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Crypt;

>>>>>>> yeison

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

<<<<<<< HEAD
=======
Route::get('/allsites', [SiteController::class, 'catalogue'])->name('site.catalogue');

Route::get('/about', function () {
    return view('about');
})->name('about');

>>>>>>> yeison
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
<<<<<<< HEAD
    Route::resource('/tests', SiteController::class)->names('site');
});


=======
    Route::resource('/site', SiteController::class)->names('site');
    Route::resource('/user', UserController::class)->names('user');
    Route::resource('/review', ReviewController::class)->names('rev');
});

>>>>>>> yeison
require __DIR__.'/auth.php';
