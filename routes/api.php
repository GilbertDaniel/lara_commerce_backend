<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductDetailsController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\VisitorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgetController;
use App\Http\Controllers\ResetController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Authentication Route
Route::post('/login', [AuthController::class, 'Login']);
Route::post('/register',[AuthController::class, 'Register']);
Route::post('/forgetpassword',[ForgetController::class, 'ForgetPassword']);
Route::post('/resetpassword',[ResetController::class, 'ResetPassword']);
Route::get('/user',[UserController::class, 'User'])->middleware('auth:api');

//get vistitor route
Route::get('/getvisitor',[VisitorController::class, 'GetVisitorDetails']);

//Contact Page Route
Route::post('/postcontact',[ContactController::class, 'PostContatDetails']);

//Site Info Route
Route::get('/siteinfo',[SiteInfoController::class, 'SiteInfo']);

//Home Slider Route
Route::get('/sliders',[HomeSliderController::class, 'getSliders']);

//Category Route
Route::get('/categories',[CategoryController::class, 'getCategories']);

//Products Route
Route::get('/search/{search}',[ProductController::class, 'getSearchProducts']);


Route::get('/products',[ProductController::class, 'getProducts']);
Route::get('/products/{remark}',[ProductController::class, 'getProductsByRemark']);
Route::get('/products/category/{category}',[ProductController::class, 'getProductsByCategory']);
Route::get('/products/category/sub/{category}/{subcategory}',[ProductController::class, 'getProductsBySubCategory']);
Route::get('/products/detail/{id}',[ProductDetailsController::class, 'getProductDetails']);


// Notification Route
Route::get('/notification',[NotificationController::class, 'getNoti']);
