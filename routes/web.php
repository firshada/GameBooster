<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopupController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/news', [NewsController::class, 'index']);

// Route::get('/checkout', function () {
//     return view('checkout');
// });


Route::group(['middleware' => 'guest'], function () {
    Route::get('/signup', [UserController::class, 'register'])->name('register');
    Route::post('/signup', [UserController::class, 'registerPost'])->name('register');
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/topup', [TopupController::class, 'index'])->name('topup');
    Route::get('/topup/{id}', [TopupController::class, 'showGameDetail'])->name('game.detail');
    Route::post('/process-topup', [TransactionController::class, 'processTopup'])->name('process.topup');
    Route::delete('/logout', [UserController::class, 'logout'])->name('logout');
});

// Route::get('/topup', [TopupController::class, 'index']);