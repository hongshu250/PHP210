@extends('layout.admins')


@section('title',$title)


@section('content')
<div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span>{{$title}}</span>
        </div>
        <div class="mws-panel-body no-padding">


            @if (count($errors) > 0)
            <div class="mws-form-message error">
                显示错误信息
                <ul>
                    @foreach ($errors->all() as $error)
                    <li style='font-size:14px'>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif


            <form id='art_form' action="/admin/upload" method="post" class="mws-form" enctype='multipart/form-data'>
                <div class="mws-form-inline">
                    
                    @php
                        $user = DB::table('user')->where('id',session('uid'))->first();


                    @endphp
                    
                    <div class="mws-form-row">
                        <label class="mws-form-label">头像</label>
                        
                        <div class="mws-form-item">


                            <img src="{{$user->pic}}" id='imgs'  alt="上传后显示图片" style="width:150px;">


                            <div style="position: relative;" class="fileinput-holder">
                                <input id="file_upload" type="file" name='pic' style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="mws-button-row">
                    {{csrf_field()}}

                      <input type="submit" class="btn btn-primary" value="修改">
                  
                    
                </div>
            </form>
        </div>      
    </div>




@stop


@section('js')
<script type="text/javascript">
    $(function () {
        $("#file_upload").change(function () {


            var imgPath = $("#file_upload").val();
           // var_dump(imgPath);


            if (imgPath == "") {
                alert("请选择上传图片！");
                return;
            }
            //判断上传文件的后缀名
            var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
            //var_dump(strExtension);


            if (strExtension != 'jpg' && strExtension != 'gif'
                && strExtension != 'png' && strExtension != 'bmp') {
                alert("请选择图片文件");
                return;
            }


            var formData = new FormData($('#art_form')[0]);
            $.ajax({
                type: "POST",
                url: "/admin/upload",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                 $('#imgs').attr('src',data);
                   
                    // $('#art_thumb').val(data);


                    setTimeout(function(){
                    location.href = '/admin';
                    },1000)


                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("上传失败，请检查网络后重试");
                }
            });
        })
    })
</script>
@stop