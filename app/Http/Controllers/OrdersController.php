<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use think\Controller;
use think\Request;
use app\common\model\Orders;
use app\common\model\Details;

class OrdersController extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {   
        $condition=[];
        //如果传了订单号
        if(!empty($_GET['oid'])){
            $condition[]=['oid','=',$_GET['oid']];
        }
        //如果传了收货人
        if(!empty($_GET['rec'])){
            $condition[]=['rec','=',$_GET['rec']];
        }
        //获取所有数据
        $orders=Orders::where($condition)->order('oid','desc')->paginate(3);

        return view('orders/index',['orders'=>$orders]);
    }

    //改变订单状态为 已发货
    public function send($id)
    {
        $data['status']=2;
        Orders::update($data,['oid'=>$id],true);
        return redirect('/admin/orders/index');

    }



    //显示指定ID号的订单详情
    public function show($id)
    {
        //获取详情数据
        $details=Details::where('orders_id','=',$id)->paginate(3);

        //遍历显示出来
        return view('orders/show',['details'=>$details]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    //修改订单部分信息
    public function edit($id)
    {

        $orders=Orders::get($id);

        return view('orders/edit',['orders'=>$orders]);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */

    //更新订单收货信息
    public function update(Request $req, $id)
    {
        try{
            Orders::update($req->post(),['oid'=>$id],true);
        }catch(\Exception $e){
            return $this->error('修改订单失败');
        }
        return $this->success('修改成功','/admin/orders/index');
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
