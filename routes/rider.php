<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RiderController;
use App\Http\Controllers\rider\RiderBookingController;
use App\Http\Controllers\rider\PasswordResetController;
// rider login 
Route::controller(RiderController::class)->prefix('rider')->group(function () {
    Route::get('/register','register_form')->name('rider.register.form');
    Route::post('/store','register')->name('rider.register');
    Route::get('/login-now','login_form')->name('rider.login.form');
    Route::post('/login','login')->name('rider.login');
  });
  
Route::get('/dashboard',[RiderController::class,'dashboard'])->middleware('auth:rider')->prefix('rider')->name('rider.dashboard');
Route::post('/logout',[RiderController::class,'logout'])->middleware('auth:rider')->prefix('rider')->name('rider.logout');

// password reset
Route::controller(PasswordResetController::class)->prefix('rider')->group(function () {
  Route::get('/forgot-password','create');
  Route::post('/forgot-password-send-url','send_url')->name('rider.forgotpassword');
  Route::get('/reset-password/{token}','reset');
  Route::post('/reset-password','store')->name('rider.resetpassword');
  Route::get('/security','security');
  Route::post('/change-password','change_password')->name('rider.change.password');
});

// rider bookings 
Route::controller(RiderBookingController::class)->middleware('auth:rider')->prefix('rider')->group(function () {
  Route::get('/booking','booking');
  Route::get('/booking/{id}','geta_booking');
  Route::post('/booking-note/{id}','add_note')->name('rider.addnote');
});
