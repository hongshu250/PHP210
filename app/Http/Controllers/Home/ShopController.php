<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
     public function shop()
    {
    	return view('home.shop',['title' => 'GGshop']);
    }
}
