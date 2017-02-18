<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('customers','CustomerController');
Route::get('customers/{id}/stringify', 'CustomerController@stringify');
Route::resource('stocks','StockController');
Route::resource('investments','InvestmentController');
Route::resource('mutualfunds','MutualfundsController');