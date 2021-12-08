<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebFrontend\AboutController;
use App\Http\Controllers\Webfrontend\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $product =[1,2,3,4,5,6];
    return view('welcome')->with([
        "data"=>$product
    ]);
});

Route::get('/about', [AboutController::class,'AboutPage'])->name("AboutPage");

Route::get('/contact', [ContactController::class,'ContactPage']);


Route::get('/products', [ProductController::class,'ProductPage']);

Route::get('products/{product_id}',[ProductController::class,'ProductDetails'])->name("ProductDetails");

Route::post('api/book',[BookController::class,'GetBook']);
