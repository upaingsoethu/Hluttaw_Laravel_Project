<?php

namespace App\Http\Controllers\Webfrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function ProductPage($category_id , $product_id)
    {
        return "Your Product Categories ID is {$category_id} and Product ID is {$product_id}";
    }
}
