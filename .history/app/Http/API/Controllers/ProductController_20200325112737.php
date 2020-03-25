<?php

namespace App\Http\API\Controllers;

use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function create()
    {
        Product::create();
    }

    public function getAll()
    {
        $product = Product::all();
        return $product;
    }
}
