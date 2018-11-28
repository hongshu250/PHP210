@extends('layout.homes')

@section('title',$title)

@section('content')


		<!-- Start Feature -->
		<section id="page-title">
		<!-- Start Container -->
		<div class="container">
			<div class="title-with-crumbs">
				<h1>Portfolio</h1>
			</div>
			<div class="title-with-crumbs waves-breadcrumbs">
				<div id="crumbs" class="pull-right">
					<span class="crumb-item"><a href="index.html">Home</a></span><span class="crumb-item current">Portfolio</span>
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
						<div class="col-md-12 ">
							<div class="row">
								<div class="tw-element waves-heading default center col-md-12" style="">
									<h3 class="heading-title">CHECK THE <span>PROJECTS</span> WHE WORKED ON<span class="title-seperator"><i class="default"><span></span><span></span></i></span></h3>
									<p>
										Crafting is our speciality, we craft beautifull web site and templates, your business with us will benefit in most better way, so why wait buy now and gain great web site from our team.
									</p>
								</div>
							</div>
							<div class="row">
								<div class="tw-element waves-portfolio col2 col-md-12" style="">
									<div class="tw-filters">
										<ul class="filters clearfix single" data-option-key="filter">
											<li><a href="#filter" data-option-value="*" class="show-all selected">Show All</a></li>
											<li class="hidden"><a href="#filter" data-option-value=".category-art" title="Art">Art</a></li>
											<li class="hidden"><a href="#filter" data-option-value=".category-design" title="Design">Design</a></li>
											<li class="hidden"><a href="#filter" data-option-value=".category-nature-2" title="Nature">Nature</a></li>
											<li class="hidden"><a href="#filter" data-option-value=".category-visualisation" title="Visualisation">Visualisation</a></li>
											<li class="hidden"><a href="#filter" data-option-value=".category-web-design" title="Web Design">Web Design</a></li>
										</ul>
									</div>
									<div class="row">
										<div class="isotope-container" data-column="2">
											<article class="portfolio not-inited category-art category-visualisation">
											<div class="portfolio-thumb">
												<img src="upload/portfolio10-570x570.jpg">
												<div class="image-overlay">
												</div>
												<div class="portfolio-hover">
													<div class="meta-link">
														<a class="to-link" href="#"><i class="fa fa-chain"></i></a><a class="to-image" href="upload/portfolio10.jpg" rel="prettyPhoto[52]"><i class="fa fa-expand"></i></a>
													</div>
													<h2 class="portfolio-title"><a href="#">Baby with shoes</a></h2>
													<span class="portfolio-meta"><a href="#" rel="tag">Art</a>, <a href="#" rel="tag">Visualisation</a></span><span  class="likeit"><i class="fa fa-heart"></i><span>10</span></span>
												</div>
											</div>
											</article>

											<article class="portfolio not-inited category-nature-2">
											<div class="portfolio-thumb">
												<img src="upload/portfolio9-570x570.jpg">
												<div class="image-overlay">
												</div>
												<div class="portfolio-hover">
													<div class="meta-link">
														<a class="to-link" href="#"><i class="fa fa-chain"></i></a><a class="to-image" href="upload/portfolio9.jpg" rel="prettyPhoto[51]"><i class="fa fa-expand"></i></a>
													</div>
													<h2 class="portfolio-title"><a href="#">Parrot</a></h2>
													<span class="portfolio-meta"><a href="#" rel="tag">Nature</a></span><span  class="likeit"><i class="fa fa-heart"></i><span>12</span></span>
												</div>
											</div>
											</article>

											<article class="portfolio not-inited category-art category-visualisation">
											<div class="portfolio-thumb">
												<img src="upload/portfolio8-570x570.jpg">
												<div class="image-overlay">
												</div>
												<div class="portfolio-hover">
													<div class="meta-link">
														<a class="to-link" href="#"><i class="fa fa-chain"></i></a><a class="to-image" href="upload/portfolio8.jpg" rel="prettyPhoto[50]"><i class="fa fa-expand"></i></a>
													</div>
													<h2 class="portfolio-title"><a href="#">Mirror of Window</a></h2>
													<span class="portfolio-meta"><a href="#" rel="tag">Art</a>, <a href="#" rel="tag">Visualisation</a></span><span  class="likeit"><i class="fa fa-heart"></i><span>8</span></span>
												</div>
											</div>
											</article>

											<article class="portfolio not-inited category-art category-nature-2">
											<div class="portfolio-thumb">
												<img src="upload/portfolio7-570x570.jpg">
												<div class="image-overlay">
												</div>
												<div class="portfolio-hover">
													<div class="meta-link">
														<a class="to-link" href="#"><i class="fa fa-chain"></i></a><a class="to-image" href="upload/portfolio7.jpg" rel="prettyPhoto[49]"><i class="fa fa-expand"></i></a>
													</div>
													<h2 class="portfolio-title"><a href="#">Pigeon</a></h2>
													<span class="portfolio-meta"><a href="#" rel="tag">Art</a>, <a href="#" rel="tag">Nature</a></span><span  class="likeit"><i class="fa fa-heart"></i><span>5</span></span>
												</div>
											</div>
											</article>
										</div>
									</div>
									<div class='waves-pagination'>
										<ul class='page-numbers'>
											<li><span class='page-numbers current'>1</span></li>
											<li><a class='page-numbers' href='#'>2</a></li>
											<li><a class='page-numbers' href='#'>3</a></li>
											<li><a class="next page-numbers" href="#"><i class="fa fa-angle-double-right"></i></a></li>
										</ul>
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