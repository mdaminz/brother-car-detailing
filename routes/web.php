<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

route::get('/', [AdminController::class, 'home']);

route::get('/home', [AdminController::class, 'index'])->name('home');

route::get('/create_service', [AdminController::class, 'create_service']);
route::post('/add_service', [AdminController::class, 'add_service']);
route::get('/view_service', [AdminController::class, 'view_service']);
route::get('/delete_service/{id}', [AdminController::class, 'delete_service']);
route::get('/update_service/{id}', [AdminController::class, 'update_service']);
route::post('/edit_service/{id}', [AdminController::class, 'edit_service']);

route::get('/services', [AdminController::class, 'services']);

route::get('/about', [HomeController::class, 'about']);

route::get('/contact', [HomeController::class, 'contact']);

route::get('/service_details/{id}', [HomeController::class, 'service_details']);

route::post('/add_booking/{id}', [HomeController::class, 'add_booking']);

route::get('/stripe/{id}', [HomeController::class, 'stripe']);

Route::post('stripe/{id}',[HomeController::class, 'stripePost'])->name('stripe.post');

route::get('/view_bookings', [AdminController::class, 'view_bookings']);

route::get('/update_booking/{id}', [AdminController::class, 'update_booking']);

route::post('/edit_booking/{id}', [AdminController::class, 'edit_booking']);

route::get('/delete_booking/{id}', [AdminController::class, 'delete_booking']);

route::post('/contact_us', [HomeController::class, 'contact_us']);

route::get('/view_message', [AdminController::class, 'view_message']);


route::get('/delete_message/{id}', [AdminController::class, 'delete_message']);

route::get('/send_mail/{id}', [AdminController::class, 'send_mail']);

route::post('/mail/{id}', [AdminController::class, 'mail']);

route::get('/view_user', [AdminController::class, 'view_user']);

route::get('/delete_user/{id}', [AdminController::class, 'delete_user']);

route::get('/user_view_booked', [HomeController::class, 'user_view_booked']);

route::get('/show_receipt/{id}', [HomeController::class, 'show_receipt']);

route::get('/review', [HomeController::class, 'review']);








//Testing Page
Route::get('/welcome', function () {
    return view('welcome');
});
