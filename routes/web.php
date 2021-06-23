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

Route::name('web.')->group(function() {
    Route::name('site.')->group(function () {

        Route::get('/', 'HomeController@view')->name('home');
        Route::get('/contact', 'ContactController@view')->name('contact');
    });
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLogin')->name('login');
Route::post('login', 'Auth\LoginController@login')->middleware(ProtectAgainstSpam::class);
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegister')->name('register');
Route::post('register', 'Auth\RegisterController@register')->middleware(ProtectAgainstSpam::class);
