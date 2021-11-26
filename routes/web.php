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
    return view('welcome');
});

Route::get('about', [AboutController::class,'AboutPage']);

Route::get('/contact', [ContactController::class,'ContactPage']);


Route::get('/products', [ProductController::class,'ProductPage'])->middleware("checkage");

Route::post('api/book',[BookController::class,'GetBook']);
