<?php

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

Route::get('/', 'pageController@welcome')->name('welcome');
Route::get('/', 'pageController@about')->name('about');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/home', 'Admin\HomeController@index')->name('adimn.home');
Route::get('/user/home', 'User\HomeController@index')->name('user.home');

Route::get('/welcome', 'pageController@welcome')->name('welcome');

Route::get('/admin/doctor', 'Admin\DoctorController@index')->name('admin.doctor.index');
Route::get('/admin/doctor/create', 'Admin\DoctorController@create')->name('admin.doctor.create');
Route::get('/admin/doctor/{id}', 'Admin\DoctorController@show')->name('admin.doctor.show');
Route::post('/admin/doctor/store', 'Admin\DoctorController@store')->name('admin.doctor.store');
Route::get('/admin/doctor/{id}/edit', 'Admin\DoctorController@edit')->name('admin.doctor.edit');
Route::put('/admin/doctor/{id}', 'Admin\DoctorController@update')->name('admin.doctor.update');
Route::delete('/admin/doctor/{id}', 'Admin\DoctorController@destroy')->name('admin.doctor.destroy');

Route::get('/user/doctor', 'User\DoctorController@index')->name('user.doctor.index');
Route::get('/user/doctor/{id}', 'Admin\DoctorController@show')->name('admin.doctor.show');


Route::get('/admin/patiant, 'PatiantController@index')->name('admin.patiant.index');
Route::get('/admin/patiant/{id}', 'PatiantController@show')->name('admin.patiant.show');
