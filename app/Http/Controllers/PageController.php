<?php

namespace App\Http\Controllers;

use App\Slide;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function get_home(Request $request){

    }
    public function getIndex(Request $request) {
        $slide = Slide::all();

        $new_product = Product::where('new', 1)->paginate(4);
        if($request->ajax() || 'NULL'){
            $products = Product::all();
            return view('front.pages.home',compact('products'));
        }

        return view('pages.trangchu',compact('slide', 'new_product'));
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
}
