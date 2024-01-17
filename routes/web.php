<?php

use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\LoginController;


use App\Http\Controllers\Website\Booking1Contoller;
use App\Http\Controllers\Website\FrontController;

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

// auth 
require __DIR__.'/auth.php';
// admin 
require __DIR__.'/admin.php';
// rider
require __DIR__.'/rider.php';
//............................Frontend Routes..........................................................

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::controller(FrontController::class)->group(function () {
    Route::get('/category','category');
    Route::get('/price','price');
    Route::get('/contact','contact');
    Route::get('/signup-rider','rider');
    Route::post('/search-booking','search_booking')->name('find.booking');
    Route::post('/send-contact','contact_us')->name('contact.us');
    
});

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::get('/registration',[LoginController::class,'registration'])->name('registration');
Route::middleware('auth')->controller(LoginController::class)->group(function () {
   
    Route::get('/profile', 'profile')->name('user.profile');
    
    Route::post('/update-profile', 'update_profile');

    Route::get('/security', 'change_password')->name('change.profile');

    Route::get('customer_logout', 'logout')->name('customer.logout');
});

// booking
Route::get('/booking/view/receiver',[Booking1Contoller::class,'receiverview']);
Route::middleware('auth')->controller(Booking1Contoller::class)->group(function () {
    Route::get('/booking', 'booking1')->name('booking');
    Route::post('/booking-store', 'store')->name('booking.store');
    Route::get('/booking/pay', 'pay')->name('booking.pay');
    Route::get('/my-bookings', 'mybookings')->name('user.bookings');
    Route::post('/booking-condition', 'condition')->name('booking.condition');
    Route::get('/booking/tracking/{id}', 'tracking')->name('booking.tracking');
    Route::post('/booking/pay-with-stripe', 'pay_with_stripe')->name('pay.stripe');
    // download
    Route::get('/booking/download/{id}', 'download_booking')->name('booking.download');
});


// SSLCOMMERZ Start


Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END






