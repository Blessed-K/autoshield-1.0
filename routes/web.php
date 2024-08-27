<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookcontroller;
use App\Http\Controllers\MpesaController;
use App\Http\Controllers\bookingcontroller;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\NewPaymentController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/billing', function () {
    return view('billing');
});


Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/services', function () {
    return view('services');
});


// Route::get('/payment', function () {
//     return view('payment');
// });

Route::get('/booking', [BookController::class, 'create']);
Route::post('/booking', [BookController::class, 'store'])->name('booking.store');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/payment', function () {
    return view('newpayment');
});

Route::get('/maintenance', function () {
    return view('maintenance');
});


Route::get('/payment', [PaymentsController::class, 'create']);
Route::post('/payment', [PaymentsController::class, 'store'])->name('payment.store');

Route::get('/new-payment', [PaymentController::class, 'newPayment'])->name('new-payment');



Route::post('/submit-payment', [MpesaController::class, 'submitPayment']);

//new routes

Route::get('/newpayment', [NewPaymentController::class, 'index'])->name('newpayment');
Route::post('/newpayment/process', [NewPaymentController::class, 'processPayment'])->name('newpayment.process');
Route::post('/newpayment/callback', [NewPaymentController::class, 'callback']);
});

require __DIR__.'/auth.php';
