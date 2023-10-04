<?php

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get("/whatsapp/generate-qr", function () {
    $url = 'https://wa.srv15.wapanels.com/generate-qr';

    $data = [
        'device' => '6287865503778',
        'api_key' => 'AVwqwBAoRYn7YoZwSeqtSuBsEURD6Z',
    ];

    $client = new Client();


    $response = $client->post($url, [
        'json' => $data,
    ]);

    $statusCode = $response->getStatusCode();
    $body = $response->getBody()->getContents();

    $result = json_decode($body, true);
    if (array_key_exists('qrcode', $result)) {
        return view('temp', ['qrcode' => $result['qrcode']]);
    }
    return response()->json($result);

});