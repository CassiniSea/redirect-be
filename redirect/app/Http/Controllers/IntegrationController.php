<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;

class IntegrationController extends Controller
{
    public function callback(Request $request, $service)
    {
        $code = $request->get('code');
        $tenant = $request->get('state');

        $client = new GuzzleHttp\Client(['timeout' => 3.0,]);

        $client->post(
            env('MAIN_APP_URL')."/api/integration/$service/callback?state=$tenant",
            [
                'form_params' => [
                    'code' => $code,
                ]
            ]
        );
    }
}
