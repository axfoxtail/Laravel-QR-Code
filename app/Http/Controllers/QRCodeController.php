<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;

class QRCodeController extends Controller
{
    //
    public function simpleQr()
    {
       return QrCode::size(300)->generate('A basic example of QR code!');
    }  
    public function colorQr()
    {
        return QrCode::size(300)
                ->backgroundColor(255,55,0)
                ->generate('Color QR code example');
    }    
    public function imageQr()
    {
        $image = QrCode::format('png')
                 ->merge(public_path('images/gold-star.png'), 0.5, true)
                 ->size(500)->errorCorrection('H')
                 ->generate('Image qr code example');
        return response($image)->header('Content-type','image/png');
    }
}
