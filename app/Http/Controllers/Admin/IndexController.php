<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
<<<<<<< HEAD
    	return view('admin.index');
=======
    	return view('admin.index',['title' => 'GGshop']);
>>>>>>> 2018-11-25 20:17 更新用户添加
    }
}
