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
    return view('home.index');
});

Route::get('reservation', function () {
    return view('reservation.index');
});

Route::get('sales-invoice', function () {
    return view('sales_invoice.index');
});

Route::get('payment', function () {
    return view('payment.index');
});

Route::get('customers', function () {
    return view('customers.index');
});

Route::get('rates', function () {
    return view('rates.index');
});

Route::get('master-records', function () {
    return view('master_records.index');
});

Route::get('reports', function () {
    return view('reports.index');
});
