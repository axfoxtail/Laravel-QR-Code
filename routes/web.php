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

Route::get('qrcode', function () {
    return QrCode::size(300)->generate('A basic example of QR code!');
});

Route::get('qrcode-with-color', function () {
    return \QrCode::size(500)
                    ->backgroundColor(0,255,255)
                    ->generate('A simple example of QR code');
});