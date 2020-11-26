<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
    public function giohang() {
        return view('pages.giohang');
    }

}
