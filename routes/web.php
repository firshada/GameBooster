<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\models\game;
use App\Models\News;
use App\Models\payment_method;
use App\Models\topup_category;
use App\Models\topup;
use App\Models\Transaction;
use App\Models\User;

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

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/signup', function () {
    return view('signup');
});