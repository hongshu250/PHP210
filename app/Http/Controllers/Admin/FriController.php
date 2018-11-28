<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
use App\Model\Admin\Fri;
use Illuminate\Contracts\Encryption\DecryptException;
use DB;
class FriController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	
    	$fname = $request->input('fname');
    	$rs = Fri::where('fname','like','%'.$fname.'%')->paginate($request->input('num',5));
        

		return view('admin.fri.index',[
			'title'=>'友情链接浏览管理页面',
			'rs' => $rs,
			'request'=> $request
			
		]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	
    	return view('admin.fri.add',['title'=>'添加广告']);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //1.表单验证
        $this->validate($request, [
             'fname' => 'required|regex:/[\x{4e00}-\x{9fa5}]+/u'
            
        ],[
             'fname.required'=>'名称不能为空'
            
        ]);


    	$res = $request->except('_token');
    	$res['addtime'] = date(time());
    	$res['url'] = 'http://'.$res['url'];
    	// dd($res);
            $rs = Fri::create($res);
        try{
     
            if($rs){
                return redirect('/admin/fri')->with('success','添加成功');
            }
        }catch(\Exception $e){

            return back()->with('error','添加失败');

        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$res = Fri::find($id);

        return view('admin.fri.edit',[
            'title'=>'友情链接修改页面',
            'res'=>$res
        ]);
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
    	$res = $request->except('_token','_method');
		$res['url'] = 'http://'.$res['url'];
    	try{
           
            $res = Fri::where('fid',$id)->update($res);


            if($res){

                return redirect('/admin/fri')->with('success','修改成功');
            }
        }catch(\Exception $e){

            return back()->with('error','修改失败');

        }
    }


     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


    	try{
           
            $res = Fri::where('fid',$id)->delete();


            if($res){

                return redirect('/admin/fri')->with('success','删除成功');
            }
        }catch(\Exception $e){

            return back()->with('error','删除失败');

        }
    }


}
