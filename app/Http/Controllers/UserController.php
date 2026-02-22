<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function game()
    {
        return view ("welcome");
    }
    
   public function getData(Request $request)
    {
        return $request->all();
    }
}