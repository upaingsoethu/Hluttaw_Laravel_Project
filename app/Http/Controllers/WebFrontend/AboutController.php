<?php

namespace App\Http\Controllers\WebFrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function AboutPage()
    {
        return view('about');
    }
}
