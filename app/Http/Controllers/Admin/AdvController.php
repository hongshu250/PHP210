<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Adv;
class AdvController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        $res = Adv::orderBy('id','asc')
            ->where(function($query) use($request){
                //检测关键字
                $gtitle = $request->input('gtitle');
                $content = $request->input('content');
                //如果用户名不为空
                if(!empty($gtitle)) {
                    $query->where('gtitle','like','%'.$gtitle.'%');
                }
                //如果邮箱不为空
                if(!empty($content)) {
                    $query->where('content','like','%'.$content.'%');
                }
            })
        ->paginate($request->input('num', 10));

            // dd($res);

        return view('admin.adv.index',[
            'title'=>'用户的列表页面',
            'res'=>$res,
            'request'=>$request

        ]);
    }

    public function create()
    {
        //
        return view('admin.adv.add',['title'=>'添加广告']);
    }

    public function store(Request $request)
    {
    	//
    	$res = $request->except('_token');

    	if($request->hasFile('gpic')){
            //自定义名字
            $name = rand(111,999).time();

            //获取后缀
            $suffix = $request->file('gpic')->getClientOriginalExtension();

            $request->file('gpic')->move('./uploads',$name.'.'.$suffix);

            $res['gpic'] = '/uploads/'.$name.'.'.$suffix;

        }
    	
    	try{

            $data = Adv::create($res);
            
            if($data){
                return redirect('/admin/adv');
            }

        }catch(\Exception $e){

            return back()->with('error','添加失败');
        }
    }
    /*public function hetAdvPos(Request $request)
    {
    	//
    	$ad = Adv::ordeBy('id','gid')->where(function($query)use($request){
    		$title = $request->input('title');
    	}); 

    	dd($ad);

    	try{

	            $ads = Adv::create($ad);
	            
	            if($ads){
	                return redirect('/admin/adv')->with('success','添加成功');
	            }

	        }catch(\Exception $e){

	            return back()->with('error','添加失败');
	        }
		}*/

    public function edit($id)
    {
        //
        // 根据id获取数据
        $res = Adv::find($id);

        return view('admin.adv.edit',[
            'title'=>'用户的修改页面',
            'res'=>$res
        ]);
    }

    public function update(Request $request, $id)
    {
        

    
        //广告验证
        $res = $request->except('_token','pic','_method');

        // dd($res);die;
        if($request->hasFile('gpic')){
            //自定义名字
            $name = rand(111,999).time();

            //获取后缀
            $suffix = $request->file('gpic')->getClientOriginalExtension();

            $request->file('gpic')->move('./uploads',$name.'.'.$suffix);

            $res['gpic'] = '/uploads/'.$name.'.'.$suffix;

        }

        //数据表修改数据
        try{

            $data = Adv::where('id', $id)->update($res);
            
            if($data){
                return redirect('/admin/adv')->with('success','修改成功');
            }

        }catch(\Exception $e){

            return back()->with('error','修改失败');
        }



    }
  
}
 
