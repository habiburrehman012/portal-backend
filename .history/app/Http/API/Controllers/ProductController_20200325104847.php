<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

const $productObj = new Product;

class ProductController extends Controller
{
    public function getActiveProducts()
    {
        $product = $productObj->where('is_active',true)->count();
        return $product;
    }
}
