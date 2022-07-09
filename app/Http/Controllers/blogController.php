<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    function blogpage()
    {
        return view('crime-blog');
    }
}
