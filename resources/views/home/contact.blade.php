@extends('layout.homes')

@section('title',$title)

@section('content')
<!-- Start Feature -->
<section id="page-title">
<!-- Start Container -->
<div class="container">
	<div class="title-with-crumbs">
		<h1>About Us</h1>
	</div>
	<div class="title-with-crumbs waves-breadcrumbs">
		<div id="crumbs" class="pull-right">
			<span class="crumb-item"><a href="index.html">Home</a></span><span class="crumb-item current">About Us</span>
		</div>
	</div>
</div>
<!-- End Container -->
</section>
<!-- End Feature -->

<!-- Start Main -->
<section id="main">
<div id="page">
	<div class="row-container light bg-scroll" style="">
		<div class="waves-container container">
			<div class="row">
				<div style="margin-top:-60px">
				</div>
				<div class="col-md-12 ">
					<div class="row">
						<div class="tw-element col-md-12" style="">
							<div class="waves-map waves-full-element">
								<!---<iframe style="width:100%;" height="350" src="https://maps.google.com/maps/ms?ie=UTF8&amp;t=m&amp;oe=UTF8&amp;msa=0&amp;msid=214016756066899835659.0004a82fbb4875ff989ac&amp;ll=-37.812607,144.968666&amp;spn=0.002967,0.001073&amp;z=17&amp;output=embed">
								</iframe>--->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="margin-bottom:-60px">
			</div>
		</div>
	</div>
	<div class="row-container light bg-scroll" style="">
		<div class="waves-container container">
			<div class="row">
				<div class="col-md-12 ">
					<div class="row">
						<div class="tw-element waves-heading default center col-md-12" style="">
							<h3 class="heading-title">CONTACT <span>FORM</span><span class="title-seperator"><i class="default"><span></span><span></span></i></span></h3>
							<p>
								What to speak directly to us, we are here and waiting for you to tell us what you thing of this theme. So don’t hesitate and contact us and rate our template.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="tw-element col-md-12" style="">
							<div role="form" class="wpcf7" id="wpcf7-f334-p121-o1" lang="en-US" dir="ltr">
								<div class="screen-reader-response">
								</div>
								<form id="contact-form">
									<span class="wpcf7-form-control-wrap your-name">
										 <input type="text"  id="name" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your name here">
									</span>
									<span class="wpcf7-form-control-wrap your-email">
										<input type="text" name="mail" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email"></span>
									<span class="wpcf7-form-control-wrap your-subject">
										<input type="text" name="website"  value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Subject"></span>
									<p>
										<span class="wpcf7-form-control-wrap your-message">
											<textarea  name="comment" id="comment" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Write your message here"></textarea></span>
									</p>
									<p>
										<input type="submit" id="submit_contact" value="Send message" class="wpcf7-form-control wpcf7-submit">
                                		<div id="msg" class="message"></div>
									<p></p>
									
								</form>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="tw-element waves-callout with-button col-md-12" style="">
							<div class="callout-container">
								<div class="callout-text">
									<p>
										<b>CRAFT</b> is all about business and gaining great opportunities so dont hesitate
									</p>
									<a href="#" target="_blank" class="btn btn-callout">Buy now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- End Main -->
@stop

@section('js')

@stop
