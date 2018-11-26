<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvController extends Controller
{
    //

   /* public function index()
    {
    	return view('admin/adv',['title'=>'后台广告管理']); 
    }*/

    public function create()
    {
        //
        return view('admin.adv.add',['title'=>'添加广告']);
    }

    public function store(Request $request)
    {
    	//
    	$res = $request->all();

    	// dump($res);
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
  
    }
 
