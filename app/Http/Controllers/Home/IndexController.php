<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //主页
    public function index()
    {
    	return view('home.index',['title' => 'GGshop']);
    }
    
    //关于我们
    public function about()
    {
    	return view('home.about',['title' => '关于我们']);
    }
    //投资
    public function portfolio()
    {
    	return view('home.portfolio',['title' => '投资']);
    }
    //博客
    public function blog()
    {
    	return view('home.blog',['title' => '博客']);
    }
    //商品
    public function shop()
    {
    	return view('home.shop',['title' => '商品页']);
    }
    //联系我们
    public function contact()
    {
    	return view('home.contact',['title' => '联系我们']);
    }
}
