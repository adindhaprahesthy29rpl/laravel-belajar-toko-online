<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');
Route::group(['middleware' => ['jwt.verify']], function ()
{
    Route::group(['middleware'=> ['api.superadmin']], function()
    {
        Route::delete('/pelanggan3/{id}', 'Pelanggan3Controller@destroy');
        Route::delete('/petugas3/{id}', 'Petugas3Controller@destroy');
        Route::delete('/produk3/{id}', 'Produk3Controller@destroy');
        Route::delete('/transaksi3/{id}', 'Transaksi3Controller@destroy');
        Route::delete('/detail_transaksi3/{id}', 'Detail_Transaksi3Controller@destroy');
    });

    Route::group(['middleware'=> ['api.admin']], function()
    {
        Route::post('/pelanggan3', 'Pelanggan3Controller@store');
        Route::put('/pelanggan3/{id}', 'Pelanggan3Controller@update');

        Route::post('/petugas3', 'Petugas3Controller@store');
        Route::put('/petugas3/{id}', 'Petugas3Controller@update');

        Route::post('/produk3', 'Produk3Controller@store');
        Route::put('/produk3/{id}', 'Produk3Controller@update');

        Route::post('/transaksi3', 'Transaksi3Controller@store');
        Route::put('/transaksi3/{id}', 'Transaksi3Controller@update');

        Route::post('/detail_transaksi3', 'Detail_Transaksi3Controller@store');
        Route::put('/detail_transaksi3/{id}', 'Detail_Transaksi3Controller@update');
    });
    

    Route::get('/pelanggan3', 'Pelanggan3Controller@show');
    Route::get('/pelanggan3/{id_pelanggan3}', 'Pelanggan3Controller@detail');

    Route::get('/petugas3', 'Petugas3Controller@show');
    Route::get('/petugas3/{id_petugas3}', 'Petugas3Controller@detail');

    Route::get('/produk3', 'Produk3Controller@show');
    Route::get('/produk3/{id_produk3}', 'Produk3Controller@detail');

    Route::get('/transaksi3', 'Transaksi3Controller@show');
    Route::get('/transaksi3/{id_transaksi3}', 'Transaksi3Controller@detail');

    Route::get('/detail_transaksi3', 'Detail_Transaksi3Controller@show');
    Route::get('/detail_transaksi3/{id_detail_transaksi3}', 'Detail_Transaksi3Controller@detail');
    });