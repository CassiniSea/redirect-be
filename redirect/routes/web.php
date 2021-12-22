<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

Route::post('/webhooks/salesforce', function (Request $request) {
    \Log::info($request->all());
    Http::post('http://qqqqqqqqqqqqqqqq.api.neurano.localhost:8000/webhooks/salesforce', $request->all());
    return view('welcome');
});
