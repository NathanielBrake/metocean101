<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

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
        Route::get('/data', 'DataController@view')->middleware(['auth'])->name('data');
        Route::post('/getOceanData', 'DataController@getOceanData')->middleware(['auth'])->name('oceanData');
    });
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLogin')->name('login');
Route::post('doLogin', 'Auth\LoginController@login')->middleware(ProtectAgainstSpam::class)->name('doLogin');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegister')->name('register');
Route::post('doRegister', 'Auth\RegisterController@register')->middleware(ProtectAgainstSpam::class)->name('doRegister');
