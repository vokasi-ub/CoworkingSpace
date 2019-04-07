<?php

use App\Http\Middleware\statusAdmin;
use App\Http\Middleware\statusUser;

Auth::routes();

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

Route::get('/', 'FrontController@index');
Route::resource('venue','VenueController')->middleware(statusAdmin::class);
Route::resource('dashboard','DashboardController')->middleware(statusAdmin::class);
Route::resource('home','HomeController')->middleware(statusUser::class);
Route::post('home.event','HomeController@event')->name('home.event')->middleware(statusUser::class);
Route::get('open', 'HomeController@open')->name('open')->middleware(statusUser::class);
Route::resource('front','FrontController')->middleware(statusUser::class);
Route::resource('event','EventController')->middleware(statusAdmin::class);
Route::resource('user','UserController')->middleware(statusAdmin::class);
Route::resource('transaksi','TransaksiController')->middleware(statusAdmin::class);
Route::get('/home_admin', 'Login@index');

