<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'Anik';
        $users =array(
            "name" =>"Anik Hasan",
            "email" =>"anik@gmail.com",
            "phone" =>"0127424444928"
        );
      return view('user',compact('name'));  
    }
}
