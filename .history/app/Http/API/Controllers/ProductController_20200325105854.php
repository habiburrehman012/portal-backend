<?php

namespace App\Http\API\Controllers;

use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function getActiveProducts()
    {
        $product = Product::all();
        return $product;
    }
}
