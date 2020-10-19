<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayMethodController;

Route::get('/', function () {
    return view('stripe');
});

Route::post('stripe',         [PayMethodController::class, 'stripe' ])->name('stripe');
Route::get('paymentSuccess', [PayMethodController::class, 'success'])->name('paymentSuccess');

