<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function getProductDetails(Request $request){
        $product_id = $request->id;
        $productDetails = ProductDetail::leftjoin('products', 'product_details.product_id', '=', 'products.id')
        ->where('products.id',$product_id)
        ->get();

        return $productDetails;
    }
}
