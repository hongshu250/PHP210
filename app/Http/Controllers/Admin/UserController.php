<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
=======
use App\Http\Requests\UserRequest;
use Hash;
use App\Model\Admin\User;
>>>>>>> 2018-11-25 20:17 更新用户添加

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
<<<<<<< HEAD
=======

        echo '列表页面';
>>>>>>> 2018-11-25 20:17 更新用户添加
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
<<<<<<< HEAD
=======
        return view('admin.user.add',['title'=>'添加管理员']);
>>>>>>> 2018-11-25 20:17 更新用户添加
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function store(Request $request)
    {
        //
=======
    public function store(UserRequest $request)
    {
        //表单验证
    
        $res = $request->except('_token','repass');
        if($request->hasFile('pic')){
            //自定义名字
            $name = rand(111,999).time();

            //获取后缀
            $suffix = $request->file('pic')->getClientOriginalExtension();

            $request->file('pic')->move('./uploads',$name.'.'.$suffix);

            $res['pic'] = '/uploads/'.$name.'.'.$suffix;

        }

        //网数据表里面添加数据  hash加密
        $res['upass'] = Hash::make($request->upass);

        //加密 解密
        // $res['password'] = encrypt($request->password);


        // dd($res);

        //存数据
        

        try{

            $data = User::create($res);
            
            if($data){
                return redirect('/admin/user');
            }

        }catch(\Exception $e){

            return back()->with('error','添加失败');
        }
>>>>>>> 2018-11-25 20:17 更新用户添加
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
