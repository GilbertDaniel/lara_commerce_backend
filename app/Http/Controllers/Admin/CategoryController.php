<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories(){
        $categories = Category::all();
        $categoryDetails = [];

        foreach($categories as $cat){
            $subcategories = SubCategory::where('category_name', $cat['category_name'])->get();

            $item = [
                'category_name' => $cat['category_name'],
                'category_image' => $cat['category_image'],
                'subcategory_name' => $subcategories
            ];

            array_push($categoryDetails, $item);
        }
        return $categoryDetails;
    }
}
