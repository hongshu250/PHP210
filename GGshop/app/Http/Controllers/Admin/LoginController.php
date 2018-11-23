<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Session;
use DB;
use Hash;
class LoginController extends Controller
{
    //

    public function login()
    {
    	return view('/admin/login',['title'=>'后台登录']);
    }


    public function dologin(Request $request)
    {

 		//验证码检测
		echo session('code');

		// if($code != $request->code){
		//     return back()->with('error','验证码错误');
		// }

		// //存点信息  session
		// session(['uid'=>$rs->id]);
		// session(['uname'=>$rs->username]);

		// return redirect('/admin');
    }

     /**
     * 验证码生成
     * @param  [type] $tmp [description]
     * @return [type]      [description]
     */
	public function captcha()
    {
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(123, 203, 230);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体
        $builder->build($width = 125, $height = 48, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        session(['code'=>$phrase]);
        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();
    }

}


 

