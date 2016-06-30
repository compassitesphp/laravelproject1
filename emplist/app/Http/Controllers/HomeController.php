<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    function Index()
    {
        echo "hello";
    }
    
    function Hello()
    {
        echo "addition";
    }
    
   function Second()
    {
        return view('first');
    }
}
