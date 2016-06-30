<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomController extends Controller
{
    function Index()
    {
        echo "custom controller";
        
    }
    
    function sayName($name="no name")
    {
        echo "hello $name <br/>";
    }
    
    
    function First()
    {
        $data['title']="hello";
        $data['content']="mysql 5.6  php 5.5.9";
        return view('first',$data);
    }
}
