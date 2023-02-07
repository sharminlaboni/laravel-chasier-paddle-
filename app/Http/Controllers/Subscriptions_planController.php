<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use App\Models\Subscription_plan;

use Illuminate\Http\Request;

class Subscriptions_planController extends Controller
{
   public function store(){
    

    $client = new Client();
    
    $response = $client->post('https://sandbox-vendors.paddle.com/api/2.0/subscription/plans', [
        'form_params' => [
            'vendor_id' => '10405',
            'vendor_auth_code' => 'b8812d669929d309ca468b769e5008e7e98d9d7801a203e096',
            'plan' => '43954'
        ]
    ]);
    
    $data = json_decode($response->getBody()->getContents());
    dd($response);
    
   }
}
