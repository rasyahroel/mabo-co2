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

Route::get('/profile', function () {
    return view('data-profile');
})->name('profile')->middleware(['auth:admin'], 'can:role,"admin","member"');

Route::group([
        'prefix'=>config('admin.prefix'),
        'namespace'=>'App\\Http\\Controllers',
    ],function () {

        Route::get('login','LoginAdminController@formLogin')->name('admin.login');
        Route::post('login','LoginAdminController@login');

        Route::middleware(['auth:admin'])->group(function () {
            Route::post('logout','LoginAdminController@logout')->name('admin.logout');

            Route::view('/','dashboard')->name('dashboard');
            Route::view('/service','data-service')->name('service')->middleware('can:role,"admin","member"');
            Route::view('/admin','data-admin')->name('admin')->middleware('can:role,"admin"');
        });
});

