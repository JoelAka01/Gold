<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Validation\RegisterValidation;

class ClientController extends Controller
{
        // public  function registerOrder(Request $request) {
    //     $user = Order::create([
    //         'email' => $request->input('email'),
    //         'names' => $request->input('name')." ".$request->input('lastname'),
    //         'address' => $request->input('address'),
    //     ]);
    //     return response()->json($user);
    // }
    //
    public function home(){
        $products=Product::get();
        return view('client.home')->with('products',$products);
    }
    public function service(){
        return view ('client.service');
    }
    public function financial(){
        return view ('client.financial');
    }
    public function register(Request $request, RegisterValidation $validation) {
        $validator = Validator::make($request->all(), $validation->rules(), $validation->messages());

        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 401);
        }

        $user = User::create([
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'password' => bcrypt(Str::random(10)),
            'api_token' => Str::random(60)
        ]);

        return response()->json($user);
    }
}
