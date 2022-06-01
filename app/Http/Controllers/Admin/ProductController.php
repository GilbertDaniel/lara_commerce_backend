<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProductsByRemark(Request $request){
        $remark = $request->remark;
        $products = Product::where('remark', $remark)->get();
        return $products;
    }

    public function getProductsByCategory(Request $request){
        $category = $request->category;
        $products = Product::where('category', $category)->get();
        return $products;
    }

    public function getProductsBySubCategory(Request $request){
        $category = $request->category;
        $subcategory = $request->subcategory;
        $products = Product::where('category', $category)->where('subcategory', $subcategory)->get();
        return $products;
    }

    public function getSearchProducts(Request $request){
        $search = $request->search;
        $products = Product::where('name', 'LIKE', "%{$search}%")
        ->orWhere('brand', 'LIKE', "%{$search}%")
        ->orWhere('product_code', 'LIKE', "%{$search}%")
        ->orWhere('category', 'LIKE', "%{$search}%")
        ->get();
        return $products;
    }
}
