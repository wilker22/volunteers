<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');
// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');
