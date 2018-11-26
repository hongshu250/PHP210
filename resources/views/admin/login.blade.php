<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>后台登录-X-admin2.0</title>
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/admins/css/font.css">
    <link rel="stylesheet" href="/admins/css/form.css">
    <link rel="stylesheet" href="/admins/css/xadmin.css">
    <link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/admins/bootstrap/js/bootstrap.min.js" media="screen">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="/admins/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/admins/js/xadmin.js"></script>

<body class="login-bg">

    <div id="mws-login-wrapper">
       
      <div class="login">
          @if(session('error'))
              <div class="mws-form-message error">
                  <li>{{session('error')}}</li>
              </div>
          @endif
          <div class="message">欢迎来到GGshop后台管理</div>
      <div id="darkbannerwrap"></div>
          
          <form method="post" class="layui-form" action="/admin/dologin">
              <input name="uname" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
              <hr class="hr15">
              <input name="upass" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
              <hr class="hr15">
              <input name="code" placeholder="验证码"  type="text" style='width:210px'>
              <img src="/admin/captcha" alt="" onclick='this.src = this.src+="?1"'>
              <hr class="hr15">
              {{csrf_field()}}
              <input type="submit" value="登录" class="btn btn-success mws-login-button">
              <hr class="hr20" >

          </form>
      </div>
    </div>

    <!-- JavaScript Plugins -->
    <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/admins/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admins/custom-plugins/fileinput.js"></script>
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/admins/jui/js/jquery-ui-effects.min.js"></script>
    <!-- Plugin Scripts -->
    <script src="/admins/plugins/validate/jquery.validate-min.js"></script>
    <!-- Login Script -->
    <script src="/admins/js/core/login.js"></script>
    <script>
        $(function  () {
            layui.use('form', function(){
              var form = layui.form;
              // layer.msg('玩命卖萌中', function(){
              //   //关闭后的操作
              //   });
              //监听提交
              form.on('submit(login)', function(data){
                // alert(888)
                layer.msg(JSON.stringify(data.field),function(){
                    location.href='index.html'
                });
                return false;
              });
            });
        })


        $("#change").click(function(){
              $url = "{{ URL('/admin/captcha') }}";
              $url = $url + "/" + Math.random();
              document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
           })

        $('.mws-form-message').delay(1000).slideUp(2000);
               
    </script>


</body>
</html>

