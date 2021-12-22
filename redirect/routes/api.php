<?php

use App\Http\Controllers\IntegrationController;
use App\Http\Controllers\SalesforceRedirectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('test', function(Request $request){
    \Log::info('test');
    $data = $request->all();
    \Log::info($data);
    return $data;
});

Route::group([
    'prefix' => 'integration',
    'as' => 'integration.'
], function () {
    Route::get('{service}/callback', [IntegrationController::class, 'callback']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
