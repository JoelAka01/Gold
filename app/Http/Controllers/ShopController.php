<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Srmklive\PayPal\Services\ExpressCheckout;

class ShopController extends Controller
{
    //
    public function shop(){
        $products=Product::get();
            return view('client.shop')->with('products',$products);
    }
    public function show($id){
        $product=Product::find($id);
        return view('client.product')->with('product',$product);

    }
    public function addtocart () {
        $product=Product::find(1);
        $oldCart =Session::has('cart') ? Session::get('cart') : null ;
        $cart = new Cart($oldCart); 
        $cart->add($product);
        Session::put('cart', $cart);
        Session::put('topCart',$cart->items);
        return redirect('register');

    }
    public function payer(Request $request){

        try{

            $oldCart = Session::has('cart') ? Session::get('cart') : null;
            $cart = new Cart($oldCart);
    
            $order = new Order();
            $order->names = $request->input('firstname')." ".$request->input('lastname');
            $order->address = $request->input('address');
            $order->email = $request->input('email');
            $order->cart = serialize($cart);

            Session::put('order', $order);

            $checkoutData = $this->checkoutData();

            $provider = new ExpressCheckout();
    
            $response = $provider->setExpressCheckout($checkoutData);
    
            return redirect($response['paypal_link']);

        }
        catch(\Exception $e){
            return redirect('/home')->with('status', $e->getMessage());
        }

    }
}
