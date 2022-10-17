<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function product()
    {
     $price= ["A"=>"500","B"=>"600"];
     return view("product")
     ->with ("price",$price);  
    }
}
