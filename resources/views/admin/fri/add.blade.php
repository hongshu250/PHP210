@extends('layout.admins')

@section('title', $title)

@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>{{$title}}</span>
    </div>
    <div class="mws-panel-body no-padding">

@if (count($errors) > 0)
<div class="mws-form-message error">
    错误信息
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


        <form action="/admin/fri" method='post' enctype='multipart/form-data' class="mws-form">
            <div class="mws-form-inline">
                
                <div class="mws-form-row">
                    <label class="mws-form-label">名称</label>
                    <div class="mws-form-item">
                        <input class="small" type="text" name="fname">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">链接地址&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;http://</label>
                    <div class="mws-form-item">
                        <input class="small" type="text" name="url">
                    </div>
                </div>
                

                
                
                
            </div>
            <div class="mws-button-row">
                {{csrf_field()}}
                <input type="submit" class="btn btn-primary" value="添加">
                
                
            </div>
        </form>
    </div>      
</div>
@stop

@section('js')
<script>
    /*setTimeout(function(){

        $('.mws-form-message').fadeOut(2000);

    },5000)*/

    $('.mws-form-message').delay(3000).fadeOut(2000);
</script>

@stop
