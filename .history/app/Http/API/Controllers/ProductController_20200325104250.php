<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    const $product = Product::where('is_active',true)->count();
    error_log($product);
}
