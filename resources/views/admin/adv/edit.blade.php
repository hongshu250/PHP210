@extends('layout.admins')

@section('title',$title)

@section('content')
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span>{{$title}}</span>
        </div>
        <div class="mws-panel-body no-padding">

        	<form action="/admin/adv/{{$res->id}}" method="post" class="mws-form" enctype='multipart/form-data'>
        		<div class="mws-form-inline">
        			<div class="mws-form-row">
        				<label class="mws-form-label">广告描述</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name='content' value='{{$res->content}}'>
        				</div>
        			</div>


        			<div class="mws-form-row">
        				<label class="mws-form-label">广告标题</label>
        				<div class="mws-form-item">
        					<input type="text" class="small" name='gtitle' value="{{$res->gtitle}}">
        				</div>
        			</div>
					
					<div class="mws-form-row">
                    	<label class="mws-form-label">广告图片</label>
                    	<div class="mws-form-item">
                        	<div style="position: relative;" class="fileinput-holder">
                                <img src="{{$res->gpic}}" alt="">
                        		<input type="file" name='gpic' style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;">
                        	</div>
                        </div>
                    </div>
        		</div>
        		<div class="mws-button-row">
					{{csrf_field()}}

                    {{method_field('PUT')}}

        			<input type="submit" class="btn btn-primary" value="修改">
        			
        		</div>
        	</form>
        </div>    	
    </div>
@stop

@section('js')
<script>
	$('.mws-form-message').delay(2000).fadeOut(2000);
</script>
@stop