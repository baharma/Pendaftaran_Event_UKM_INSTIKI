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

Route::get('/', 'HomeController@index');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', 'dashboardController@index')->name('dashboard');
    Route::resource('ukmlist', 'ListUkmController');
    Route::resource('postevent', 'PostController');
    Route::resource('thumnail', 'ThumnailController');
});


Route::get('detail/{id}', 'HomeController@show');


Route::get('register', 'RegisterContriller@create')->name('register');
Route::post('register', 'RegisterContriller@store');

Route::get('logins', 'LoginController@create')->name('logins');
Route::post('logins', 'LoginController@store');

Route::post('logout', 'LogoutController@logout')->name('logout');
