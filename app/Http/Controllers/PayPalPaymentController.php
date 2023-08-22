<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Validation\RegisterValidation;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalPaymentController extends Controller
{
//    public  function register(Request $request, RegisterValidation $validation) {
//         $validator = Validator::make($request->all(), $validation->rules(), $validation->messages());

//         if($validator->fails()) {
//             // $data=['errors' => $validator->errors()];
//             // return back()->with('status', json_encode($data));
//             return Redirect::to('register')->with('status', 'cet adress mail exit deja  ');

//         }

//         $user = User::create([
//             'email' => $request->input('email'),
//             'name' => $request->input('name'),
//             'password' =>Hash::make('Goldstreet') ,
//             'api_token' => Str::random(60),
//         ]);
//         $user->save();
        

//     }

    public function handlePayment(Request $request, RegisterValidation $validation)
    {

        $validator = Validator::make($request->all(), $validation->rules(), $validation->messages());

        if($validator->fails()) {
            // $data=['errors' => $validator->errors()];
            // return back()->with('status', json_encode($data));
            return Redirect::to('register')->with('status', 'cet adress mail exit deja  ');

        }

        $user = User::create([
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'password' =>Hash::make('Goldstreet') ,
            'api_token' => Str::random(60),
        ]);
        $user->save();
        
        $id=1;
            $product = Product::find($id);

            // if (!$product) {
            //     return "Product not found in the database.";
            // }

        try{
            $paypalModule = new ExpressCheckout;

            $orderItems = [
                [
                    'name' => $product->name,
                    'price' => $product->price,
                    'desc' => $product->description,
                ]
            ];

            $invoiceDescription = "Order #$id Bill";
            $returnUrl = route('success.payment');
            $cancelUrl = route('cancel.payment');
            $totalAmount = $product->price ; // You might want to use $product->quantity here

            $checkoutDetails = [
                'items' => $orderItems,
                'invoice_id' => $id,
                'invoice_description' => $invoiceDescription,
                'return_url' => $returnUrl,
                'cancel_url' => $cancelUrl,
                'total' => $totalAmount,
            ];

            $res = $paypalModule->setExpressCheckout($checkoutDetails);
            $res = $paypalModule->setExpressCheckout($checkoutDetails, true);
            // Ajoute de la section orders


        // Appel de la fonction register

            return redirect($res['paypal_link']);

        }
        catch(\Exception $e){
            return back()->with('status', $e->getMessage());
        }

    }
   
    public function paymentCancel()
    {
        dd('Your payment has been declend. The payment cancelation page goes here!');
    }
  
    // public function paymentSuccess(Request $request, Order $order)
    // {
    //     $paypalModule = new ExpressCheckout;
    //     // $response = $paypalModule->getExpressCheckoutDetails($request->token);
    //     if ($request->input('paymentId') && $request->input('PayerID')) {
    //         $transaction = $this->gateway->completePurchase(array(
    //             'payer_id' => $request->input('PayerID'),
    //             'transactionReference' => $request->input('paymentId')
    //         ));
    //         $response = $transaction->send();


    //         if ($response->isSuccessful()) {
    //         $arr = $response->getData();

    //         $order = new Order();
    //         $payment->payment_id = $arr['id'];

    //         $order->names = $request->input('name')." ".$request->input('lastname');
    //         $order->address = $request->input('address');
    //         // $order->email = $request->input('email');
    //         $order->email = $arr['payer']['payer_info']['email'];
    //         $order->cart = $arr['payer']['payer_info']['payer_id'];

    //         // $order->cart = serialize($cart);
    //         $order->save();
    //         Session::put('order', $order);
    //         $order = Session::get('order');

    //         return back()->with('status', 'Vous faites partie de la famille Gold Street');
    //     }
    
    //     dd('Error occurred!');
    // }
    public function paymentSuccess(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ));

            $response = $transaction->send();

            if ($response->isSuccessful()) {

                $arr = $response->getData();

                $payment = new Payment();
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr['state'];

                $payment->save();

                // return "Payment is Successfull. Your Transaction Id is : " . $arr['id'];
        return back()->with('status', 'vous faite partie de la famile Gold street');

            }
            else{
                return $response->getMessage();
            }
        }
    }
    // public function activateview($id){
    //     $user=User::find($id);
    //     $user->status=1;
    //     $user->update();
    //     return back()->with('status', 'vous faite partie de la famile Gold street');

    // }
}