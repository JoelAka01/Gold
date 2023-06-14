<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function home(){
        return view ('client.home');
    }
    public function service(){
        return view ('client.service');
    }
    public function financial(){
        return view ('client.financial');

    }
}
