<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Slide;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    //
    public function getIndex(Request $request) {
        $slide = Slide::all();

        $new_product = Product::where('new', 1)->paginate(4);

        return view('pages.trangchu',compact('slide', 'new_product'));
    }

    public function fetch_data(Request $request) {
        if($request->ajax()) {
            $new_product = Product::where('new', 1)->paginate(4);
            return view('pages.trangchu',compact('new_product'))->render();
        }
    }

    public function getLoaiSp() {
        return view('pages.loai_sanpham');
    }

    public function getChiTietSp() {
        return view('pages.chi-tiet-Sp');
    }

    public function contact() {
        return view('pages.contact');
    }

    public function AddToCart(Request $req, $id) {
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart', $cart);
        return redirect()->back();
    }
}
