<?php

namespace App\Http\Controllers;


use App\Cart;
use App\Product;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //
    public function themvaogiohang(Request $request) {
        $oldCart = Cookie::get('cart');

        if($oldCart) {
            Session::put('title', 'value');
            Session::put('content', 'value');
            Session::put('price', 'value');
        }
        return view('pages.themvaogiohang');
    }
}
