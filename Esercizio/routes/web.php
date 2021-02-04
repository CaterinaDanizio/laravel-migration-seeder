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

Route::get('/brand', 'BrandController@index')
    -> name('brand-index');

Route::get('/brand/{id}', 'BrandController@show') 
    -> name('brand-show');

Route::get('/employee', 'EmployeeController@index')
    -> name('employee-index');

Route::get('/employee/{id}', 'EmployeeController@show') 
    -> name('employee-show');

Route::get('/location', 'LocationController@index')
    -> name('location-index');

Route::get('/location/{id}', 'LocationController@show') 
    -> name('location-show');
