<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function listProducts(Request $request) {
        return view('product.listAll');
    }
}
