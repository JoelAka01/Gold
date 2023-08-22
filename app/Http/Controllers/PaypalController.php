<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\PayPalClientModel;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Http\Controllers\Auth\RegisteredUserController;

class PaypalController extends Controller
{
    public function payment(Request $request)
    {
            // Appel de la méthode store du contrôleur RegisteredUserController
        $userController = new RegisteredUserController();
        $userController->store($request);
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        
        $id=1;
            $product = Product::find($id);
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal_success'),
                "cancel_url" => route('paypal_cancel')
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "EUR",
                        // "value" => $request->price
                        'name' => $product->name,
                        'value' => $product->price,
                        'desc' => $product->description,
                    ]
                ]
            ]
        ]);


        if(isset($response['id']) && $response['id']!=null) {
            foreach($response['links'] as $link) {
                if($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
    // dd($response);
        if(isset($response['status']) && $response['status'] == 'COMPLETED') {
            // Extract payment information from $response
            $paymentData = [
                'payment_id' => $response['id'], // You should replace 'id' with the actual key for payment ID in $response
                'payment_status' =>$response['status'],
                'payer_email' => $response['payment_source']['paypal']['email_address'], 
                'amount' => $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'], 
                'currency' => $response['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'],
                'payer_id'=>$response['payer']['payer_id'],
                // Add more fields as needed
            ];
    
            // Store payment information in the pay_pal_client table
            PayPalClientModel::create($paymentData);
    
            return "Payment is successful!";
        } else {
            return redirect()->route('paypal_cancel');
        }
    }

    public function cancel()
    {
        return "Payment is cancelled!";
    }
}
