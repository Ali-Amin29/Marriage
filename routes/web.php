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

// User routes
Route::get('/', function () {
    return view('index');
});
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/service', function () {
    return view('services');
});
Route::get('change-password', function () {
    return view('change-password');
});


// client routes
Route::get('client', function () {
    return view('DashBoardCustomer.index');
});
Route::get('profile', function () {
    return view('DashBoardCustomer.profile');
});
Route::get('confirm', function () {
    return view('DashBoardCustomer.confirm-registeration');
});
Route::get('search-partiner', function () {
    return view('DashBoardCustomer.search-partiner');
});
Route::get('invoice', function () {
    return view('DashBoardCustomer.invoice');
});


// Supplier routes
Route::get('supplier', function () {
    return view('DashBoardSupplierService.index');
});
Route::get('user-search', function () {
    return view('DashBoardSupplierService.user-search');
});
Route::get('supplier-service', function () {
    return view('DashBoardSupplierService.supplier-services');
});
Route::get('coupon', function () {
    return view('DashBoardSupplierService.coupon');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');