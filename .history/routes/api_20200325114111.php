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

Route::get('/products/all',function(){
    try
    {
        report("hall")
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