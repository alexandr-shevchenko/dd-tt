<?php

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

Route::get('/', function () {
    $orders = DB::table('orders')->get();

    return view('welcome', ['orders' => $orders]);
});

Route::get('/sorry', function () {
    return view('sorry');
});

Route::get('/thank-you', function () {
    return view('thank-you');
});
