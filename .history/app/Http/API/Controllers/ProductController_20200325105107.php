<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

$productObj = new APP\Product;

class ProductController extends Controller
{
    public function getActiveProducts()
    {
        $product = $productObj->where('is_active',true)->count();
        return $product;
    }
}
