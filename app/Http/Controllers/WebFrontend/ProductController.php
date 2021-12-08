<?php

namespace App\Http\Controllers\Webfrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function ProductPage()
    {
        // return "Your Product Categories ID is {$category_id} and Product ID is {$product_id}";
        $products_list =["Apple" , "Orange" , "Piple","Banana","Watermellon"] ;
        return view('products.productlist' ,[
            'products'=> $products_list
        ]);
    }
    function ProductDetails($book_id)
    {
        return "Your Book ID is {$book_id}";
    }

}
