## Laravel QR
### Laravel 8 Simple Qr Code Generator Example
Step 1 – Install Laravel 8 App
Step 2 – Connecting App to Database
Step 3 – Install simple-QRcode Package
Step 4 – Configure Simple QR Code Package
Step 5 – Add Routes
Step 5 – Run Development Server

#### Step 1 – Install Laravel 8 App
`composer create-project --prefer-dist laravel/laravel Laravel-QR-Code`

#### Step 2 – Connecting App to Database
 `DB_CONNECTION=mysql`
 `DB_HOST=127.0.0.1`
 `DB_PORT=3306`
 `DB_DATABASE=here your database name here`
 `DB_USERNAME=here database username here`
 `DB_PASSWORD=here database password here`

 #### Step 3 – Install simple-QRcode Package
 `composer require simplesoftwareio/simple-qrcode`

 #### Step 4 – Configure Simple QR Code Package
 //config/app.php

'providers' => [
 ….
 SimpleSoftwareIO\QrCode\QrCodeServiceProvider::class
 ],

'aliases' => [
 ….
 'QrCode' => SimpleSoftwareIO\QrCode\Facades\QrCode::class
 ],

 #### Step 5 – Add Routes
 Route::get('qrcode', function () {
     return QrCode::size(300)->generate('A basic example of QR code!');
 });

 Route::get('qrcode-with-color', function () {
     return \QrCode::size(300)
                     ->backgroundColor(255,55,0)
                     ->generate('A simple example of QR code');
 });
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
