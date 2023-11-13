<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SendercustomerController;
use App\Http\Controllers\ReceivercustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\BookingController;
//use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\LoginController;
use App\Http\Controllers\Website\RegistrationController;
//use App\Http\Controllers\Website\NewShipmentController;

use App\Http\Controllers\Website\AboutController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\Booking1Contoller;
use App\Http\Controllers\WeightController;

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


//............................Frontend Routes..........................................................

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/registration',[LoginController::class,'registration'])->name('registration');
Route::post('/do_registration',[LoginController::class,'doRegistration'])->name('do.registration');
//doreg==
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/do_login',[LoginController::class,'do_login'])->name('do.login');
Route::get('customer_logout',[LoginController::class,'logout'])->name('customer.logout');


// Route::get('/registration',[RegistrationController::class,'registration'])->name('registration');

Route::get('/booking1',[Booking1Contoller::class,'booking1'])->name('booking1');
Route::post('/web_booking-store',[Booking1Contoller::class,'store'])->name('web.booking.store');


Route::get('/about',[AboutController::class,'about'])->name('about');

// Route::get('/contact',[ContactController::class,'contact'])->name('contact');




//...................................Backend Routes...................................

// Route::group(['middleware'=>'auth'], function(){  });


Route::get('/dashboard',[DashboardController::class,'dashboard']) ->name('dashboard');


Route::get('/sender',[SendercustomerController::class,'sender']) ->name ('sender');
Route::get('/sender-create',[SendercustomerController::class,'submit']) ->name ('sender.submit');
Route::post('/sender-store',[SendercustomerController::class,'store']) ->name ('sender.store');


Route::get('/receiver',[ReceivercustomerController::class,'receiver']) ->name('receiver');
Route::get('/receiver-create',[ReceivercustomerController::class,'accept']) ->name ('receiver.accept');
Route::post('/receiver-store',[ReceivercustomerController::class,'store']) ->name ('receiver.store');


//admin panel route



Route::get('/admin',[AdminController::class,'admin']) ->name('admin');



Route::get('/shipment',[ShipmentController::class,'shipment']) ->name('shipment');
Route::get('/shipment-create',[ShipmentController::class,'sendera']) ->name('shipment.sendera');
Route::post('/shipment-store',[ShipmentController::class,'store']) ->name ('shipment.store');

//category
Route::get('/category',[CategoryController::class,'category']) ->name('category');
Route::get('/category-create',[CategoryController::class,'agree']) ->name('category.agree');
Route::post('/category-store',[CategoryController::class,'store']) ->name ('category.store');


//weight
Route::get('/weight',[WeightController::class,'weight']) ->name('weight');
Route::get('/weight-create',[WeightController::class,'agreed']) ->name('weight.agreed');
Route::post('/weight_store',[WeightController::class,'weightStore']) ->name ('weight.store');







Route::get('/booking',[BookingController::class,'booking']) ->name('booking');
Route::get('/booking-create',[BookingController::class,'accept']) ->name ('booking.accept');
Route::post('/booking-store',[BookingController::class,'store']) ->name ('booking.store');



Route::get('/payment',[PaymentController::class,'payment']) ->name('payment');
Route::get('/payment-create',[PaymentController::class,'submit']) ->name ('payment.submit');
Route::post('/payment-store',[PaymentController::class,'store']) ->name ('payment.store');





Route::get('/warehouse',[WarehouseController::class,'warehouse']) ->name('warehouse');



Route::get('/report',[ReportController::class,'report']) ->name('report');
Route::get('/booking-report',[ReportController::class,'booking_report']) ->name('booking.report');




