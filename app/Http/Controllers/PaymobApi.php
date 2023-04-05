<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class PaymobApi extends Controller
{
    public function payment()
    {
        $api_token = $this->getApiToken();
        $order = $this->registerOrder($api_token);
        $paymentToken = $this->getPaymentToken($order, $api_token);
        return Redirect::away('https://accept.paymob.com/api/acceptance/iframes/750131?payment_token='. $paymentToken);


    }


    public function getApiToken()
    {
        $response = Http::post('https://accept.paymob.com/api/auth/tokens', [
            'api_key' => env('PAYMOB_API_KEY')
        ]);
        return $response->json('token');
    }

    public function registerOrder($api_token)
    {
        $data = [
            "auth_token" => $api_token,
            "delivery_needed" => "false",
            "amount_cents" => "100000",
            "currency" => "EGP",
            "items" => [
                [
                    "name" => "Anker PowerBank",
                    "amount_cents" => "100000",
                    "description" => "Power Bank",
                    "quantity" => "1"
                ]
            ],

        ];
        $response = Http::post('https://accept.paymob.com/api/ecommerce/orders', $data);
        return $response->json();
    }

    public function getPaymentToken($order, $api_token)
    {
        $data = [
            "auth_token" => $api_token,
            "amount_cents" => "100000",
            "expiration" => 3600,
            "order_id" => $order['id'],
            "billing_data" => [
                "apartment" => "803",
                "email" => "claudette09@exa.com",
                "floor" => "42",
                "first_name" => "Clifford",
                "street" => "Ethan Land",
                "building" => "8028",
                "phone_number" => "+86(8)9135210487",
                "shipping_method" => "PKG",
                "postal_code" => "01898",
                "city" => "Jaskolskiburgh",
                "country" => "CR",
                "last_name" => "Nicolas",
                "state" => "Utah"
            ],
            "currency" => "EGP",
            "integration_id" => env('PAYMOB_INTEGRATION_ID')
        ];
        $response = Http::post('https://accept.paymob.com/api/acceptance/payment_keys', $data);
        return $response->json('token');
    }

    public function status(Request $request){

        $success= $request->success;
        return view('PaymentStatus',compact('success'));
    }

}
