<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function GetBook(Request $request)
    {
        $book=$request->book;
        $author=$request->author;

        return view("book",[
            "book"=>$book,
            "author"=>$author
        ]);
    }
}
