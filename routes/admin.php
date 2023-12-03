<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SendercustomerController;
use App\Http\Controllers\ReceivercustomerController;

use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RiderController;
use App\Http\Controllers\Website\RegistrationController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\WeightController;
//........... Admin routes ..........//
// auth 
Route::controller(AdminLoginController::class)
    ->prefix('admin')->group(function () {
        Route::get('/login', 'create');
        Route::post('/logout', 'logout')->name('admin.logout')->middleware('admin');
        Route::post('/login', 'authenticate')->name('admin.login')->middleware(['throttle:4,60']);
    });


Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('admin');

//admin
Route::middleware('admin')->prefix('admin')->controller(AdminController::class)->group(function () {
    Route::get('/profile', 'profile');
    Route::post('/change-profile', 'change_profile');
    Route::get('/dashboard/admins', 'index');
    Route::post('/dashboard/add-admin', 'addAdmin');
    Route::get('/dashboard/admin/{id}', 'view');
    Route::get('/change-password', 'change');
    Route::post('/dashboard/admin/change-password', 'changePassword');
    Route::delete('/dashboard/remove-admin/{id}', 'removeAdmin');
});
//user
Route::middleware('admin')->prefix('admin')->controller(UserController::class)->group(function () {
    Route::get('/users', 'users');
    Route::delete('/user-remove/{id}', 'remove_user')->name('remove.user');
    
});
//category
Route::middleware('admin')->prefix('admin')->controller(CategoryController::class)->group(function () {
    Route::get('/category', 'category')->name('category');
    Route::get('/category-create', 'agree')->name('category.agree');
    Route::get('/category-edit/{id}', 'edit');

    Route::put('/category-update/{id}', 'update')->name('category.update');
    Route::post('/category-store', 'store')->name('category.store');
    Route::delete('/category-remove/{id}', 'delete_category');
    
});

//weight

Route::middleware('admin')->prefix('admin')->controller(WeightController::class)->group(function () {

    Route::get('/weight', 'weight')->name('weight');
    Route::get('/weight-create', 'agreed')->name('weight.agreed');
    // 
    Route::get('/weight-edit/{id}', 'edit')->name('weight.edit');

    Route::put('/weight-update/{id}', 'update')->name('weight.update');
    Route::post('/weight_store', 'weightStore')->name('weight.store');
    Route::delete('/weight-remove/{id}', 'delete_weight')->name('weight.remove');
    
});


//rider

Route::middleware('admin')->prefix('admin')->controller(RiderController::class)->group(function () {

    Route::get('/rider', 'rider')->name('rider');
    Route::get('/rider-create', 'create')->name('rider.add');
    
    Route::get('/rider-edit/{id}', 'edit')->name('rider.edit');

    Route::put('/rider-update/{id}', 'update')->name('update.rider');
    Route::post('/add-rider', 'store')->name('create.rider');
    Route::delete('/rider-remove/{id}', 'delete_rider')->name('rider.remove');
    
});
//location

Route::middleware('admin')->prefix('admin')->controller(LocationController::class)->group(function () {

    Route::get('/location', 'location')->name('location');
    Route::get('/location-create', 'create')->name('location.add');
    
    Route::get('/location-edit/{id}', 'edit')->name('location.edit');

    Route::put('/location-update/{id}', 'update')->name('update.location');
    Route::post('/add-location', 'store')->name('create.location');
    Route::delete('/location-remove/{id}', 'delete_location')->name('location.remove');
    
});


//booking

Route::middleware('admin')->prefix('admin')->controller(BookingController::class)->group(function () {

    Route::get('/booking', 'booking')->name('admin.booking');
    Route::get('/booking/{id}', 'get_booking')->name('get.booking');

    Route::put('/booking/update/{id}', 'update_booking')->name('update.booking');
    
    Route::put('/booking/confirm/{id}', 'confirm_booking')->name('confirm.booking');

    Route::delete('/booking/delete/{id}', 'delete_booking')->name('delete.booking');
    
    
});

















