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

Route::get('/', function () {
    return view('welcome');
});

Route::get('countries', 'CountryController@showCountriesList');
Route::get('add-country', 'CountryController@showAddForm');
Route::post('add-country', 'CountryController@addCountry');


Route::get('cities', 'CityController@showCitiesList');
Route::get('add-city', 'CityController@showAddForm');
Route::post('add-city', 'CityController@addCity');