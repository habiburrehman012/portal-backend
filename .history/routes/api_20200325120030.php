<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\API\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products/add',function(Request $request){
    try
    {
        $productObj = new ProductController;
        $productObj->create($request);
        return response()->json(["success"=>true,"status"=>200,"message"=>"Successfully added the product"]);  
    }
    catch(Exception $e)
    {
        report($e);
        return response()->json(["success"=>false,"status"=>500,"data"=>[]]);
    }
});

Route::get('/products/get-all',function(){
    try
    {
        $productObj = new ProductController;
        $products = $productObj->getAll();
        return response()->json(["success"=>true,"status"=>200,"data"=>$products]);  
    }
    catch(Exception $e)
    {
        report($e);
        return response()->json(["success"=>false,"status"=>500,"data"=>[]]);
    }
});