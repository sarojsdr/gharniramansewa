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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('admin')->group(function() {

    // Admin Login Logout
    Route::get('/login','Admin\Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('logout/', 'Admin\Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');

    // Category
    Route::get('/category','Admin\CategoryController@index')->name('admin.category.index');

}) ;


Route::prefix('vendor')->group(function() {
    Route::get('/login','Vendor\Auth\VendorLoginController@showLoginForm')->name('vendor.login');
    Route::post('/login', 'Vendor\Auth\VendorLoginController@login')->name('vendor.login.submit');
    Route::get('logout/', 'Vendor\Auth\VendorLoginController@logout')->name('vendor.logout');
    Route::get('/', 'Vendor\VendorController@index')->name('vendor.dashboard');
}) ;
