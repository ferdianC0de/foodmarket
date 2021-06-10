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

Route::prefix('foods')->group(function () {
    Route::get('/', 'FoodController@allFoods');
    Route::post('/create', 'FoodController@createFood')->name('create-food');
    Route::get('/delete/{id}', 'FoodController@deleteFood')->name('delete-food');
});

Route::prefix('owner')->group(function () {
    Route::get('/', 'FoodController@foodsByOwner')->name('owner-food');
    Route::get('/input', 'FoodController@inputFood')->name('input-food');
    Route::get('/edit', 'FoodController@inputFood')->name('edit-food');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
