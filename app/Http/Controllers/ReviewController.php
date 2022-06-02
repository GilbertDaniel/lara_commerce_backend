<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function ReviewList(Request $request){

        $id = $request->id;
        $result = Review::where('product_id',$id)->orderBy('id','desc')->limit(4)->get();
        return $result;
    } // End Method
}
