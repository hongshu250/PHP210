@extends('layout.homes')

@section('title',$title)

@section('content')
<!-- Start Main -->
<section id="main">
<div class="waves-container container">
	<div class='row waves-shop'>
		<div class='waves-main left'>
			<div class='tw-product-ordering'>
				<span class='tw-order-current'>Sort by </span>
				<ul class='product-order'>
					<li><span>Default Order<i class='fa fa-angle-down'></i></span>
					<ul>
						<li><a href='#'><span class='avia-bullet'></span>Default Order</a></li>
						<li><a href='#'><span class='avia-bullet'></span>Name</a></li>
						<li><a href='#'><span class='avia-bullet'></span>Price</a></li>
						<li><a href='#'><span class='avia-bullet'></span>Date</a></li>
						<li><a href='#'><span class='avia-bullet'></span>Popularity</a></li>
					</ul>
					</li>
				</ul>
				<span class='tw-order-current'>View Items </span>
				<ul class='product-count'>
					<li><span>9 Items<i class='fa fa-sort'></i></span>
					<ul>
						<li><a href='#'><span class='avia-bullet'></span>9 Items</a></li>
						<li><a href='#'><span class='avia-bullet'></span>18 Items</a></li>
						<li><a href='#'><span class='avia-bullet'></span>27 Items</a></li>
					</ul>
					</li>
				</ul>
				<ul class='product-sort'>
					<li><a title='Click to order products descending' class='sort-desc' href='#'><i class='fa fa-long-arrow-up'></i></a></li>
				</ul>
			</div>
			<ul class="products">
				<li class="first post-70 product type-product status-publish has-post-thumbnail product_cat-posters sale shipping-taxable purchasable product-type-simple product-cat-posters instock">
				<div class='tw_product_container'>
					<a href="/homes/#">
					<span class="onsale">Sale!</span>
					</a>
					<div class='thumbnail_container'>
						<img src="/homes/upload/poster_2_up-370x370.jpg" alt="poster_2_up">
						<div class="product-hover-overlay">
							<span class='cart-load'></span>
						</div>
						<div class='tw_cart_buttons button'>
							<a href='#'><i class='fa fa-shopping-cart'></i></a><a href='#'><i class='fa fa-search'></i></a>
						</div>
					</div>
					<a href='#'>
					<div class='tw_product_header'>
						<h3>Flying Ninja</h3>
						<span class="posted_in"><a href="/homes/#" rel="tag">Posters</a></span>
						<br>
						<span class="price"><del><span class="amount">&pound;15.00</span></del><ins><span class="amount">&pound;12.00</span></ins></span>
					</div>
					</a>
				</div>
				</li>
				<li class="post-37 product type-product status-publish has-post-thumbnail product_cat-clothing product_cat-t-shirts shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-t-shirts instock">
				<div class='tw_product_container'>
					<a href="/homes/#">
					</a>
					<div class='thumbnail_container'>
						<img src="/homes/upload/T_7_front-370x370.jpg" alt="T_7_front">
						<div class="product-hover-overlay">
							<span class='cart-load'></span>
						</div>
						<div class='tw_cart_buttons button'>
							<a href='#'><i class='fa fa-shopping-cart'></i></a><a href='#'><i class='fa fa-search'></i></a>
						</div>
					</div>
					<a href='#'>
					<div class='tw_product_header'>
						<h3>Happy Ninja</h3>
						<span class="posted_in"><a href="/homes/#" rel="tag">Clothing</a>, <a href="/homes/#" rel="tag">T-shirts</a></span>
						<br>
						<span class="price"><span class="amount">&pound;18.00</span></span>
					</div>
					</a>
				</div>
				</li>
				<li class="last post-53 product type-product status-publish has-post-thumbnail product_cat-clothing product_cat-hoodies shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-hoodies instock">
				<div class='tw_product_container'>
					<a href="/homes/#">
					</a>
					<div class='thumbnail_container'>
						<img src="/homes/upload/hoodie_4_front-370x370.jpg" alt="hoodie_4_front">
						<div class="product-hover-overlay">
							<span class='cart-load'></span>
						</div>
						<div class='tw_cart_buttons button'>
							<a href='#'><i class='fa fa-shopping-cart'></i></a><a href='#'><i class='fa fa-search'></i></a>
						</div>
					</div>
					<a href='#'>
					<div class='tw_product_header'>
						<h3>Happy Ninja</h3>
						<span class="posted_in"><a href="/homes/#" rel="tag">Clothing</a>, <a href="/homes/#" rel="tag">Hoodies</a></span>
						<br>
						<span class="price"><span class="amount">&pound;35.00</span></span>
					</div>
					</a>
				</div>
				</li>
				<li class="first post-31 product type-product status-publish has-post-thumbnail product_cat-clothing product_cat-t-shirts shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-t-shirts instock">
				<div class='tw_product_container'>
					<a href="/homes/#">
					</a>
					<div class='thumbnail_container'>
						<img src="/homes/upload/T_5_front-370x370.jpg" alt="T_5_front">
						<div class="product-hover-overlay">
							<span class='cart-load'></span>
						</div>
						<div class='tw_cart_buttons button'>
							<a href='#'><i class='fa fa-shopping-cart'></i></a><a href='#'><i class='fa fa-search'></i></a>
						</div>
					</div>
					<a href='#'>
					<div class='tw_product_header'>
						<h3>Ninja Silhouette</h3>
						<span class="posted_in"><a href="/homes/#" rel="tag">Clothing</a>, <a href="/homes/#" rel="tag">T-shirts</a></span>
						<br>
						<span class="price"><span class="amount">&pound;20.00</span></span>
					</div>
					</a>
				</div>
				</li>
				<li class="post-56 product type-product status-publish has-post-thumbnail product_cat-clothing product_cat-hoodies shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-hoodies instock">
				<div class='tw_product_container'>
					<a href="/homes/#">
					</a>
					<div class='thumbnail_container'>
						<img src="/homes/upload/hoodie_5_front-370x370.jpg" alt="hoodie_5_front">
						<div class="product-hover-overlay">
							<span class='cart-load'></span>
						</div>
						<div class='tw_cart_buttons button'>
							<a href='#'><i class='fa fa-shopping-cart'></i></a><a href='#'><i class='fa fa-search'></i></a>
						</div>
					</div>
					<a href='#'>
					<div class='tw_product_header'>
						<h3>Ninja Silhouette</h3>
						<span class="posted_in"><a href="/homes/#" rel="tag">Clothing</a>, <a href="/homes/#" rel="tag">Hoodies</a></span>
						<br>
						<span class="price"><span class="amount">&pound;35.00</span></span>
					</div>
					</a>
				</div>
				</li>
				<li class="last post-377 product type-product status-publish has-post-thumbnail product_cat-clothing product_cat-hoodies shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-hoodies instock">
				<div class='tw_product_container'>
					<a href="/homes/#">
					</a>
					<div class='thumbnail_container'>
						<img src="/homes/upload/hoodie_3_front-370x370.jpg" alt="hoodie_3_front">
						<div class="product-hover-overlay">
							<span class='cart-load'></span>
						</div>
						<div class='tw_cart_buttons button'>
							<a href='#'><i class='fa fa-shopping-cart'></i></a><a href='#'><i class='fa fa-search'></i></a>
						</div>
					</div>
					<a href='#'>
					<div class='tw_product_header'>
						<h3>Patient Ninja</h3>
						<span class="posted_in"><a href="/homes/#" rel="tag">Clothing</a>, <a href="/homes/#" rel="tag">Hoodies</a></span>
						<br>
						<span class="price"><span class="amount">&pound;35.00</span></span>
					</div>
					</a>
				</div>
				</li>
				<li class="first post-374 product type-product status-publish has-post-thumbnail product_cat-clothing product_cat-t-shirts shipping-taxable purchasable product-type-simple product-cat-clothing product-cat-t-shirts instock">
				<div class='tw_product_container'>
					<a href="/homes/#">
					</a>
					<div class='thumbnail_container'>
						<img src="/homes/upload/T_2_front-370x370.jpg" alt="T_2_front">
						<div class="product-hover-overlay">
							<span class='cart-load'></span>
						</div>
						<div class='tw_cart_buttons button'>
							<a href='#'><i class='fa fa-shopping-cart'></i></a><a href='#'><i class='fa fa-search'></i></a>
						</div>
					</div>
					<a href='#'>
					<div class='tw_product_header'>
						<h3>Premium Quality</h3>
						<span class="posted_in"><a href="/homes/#" rel="tag">Clothing</a>, <a href="/homes/#" rel="tag">T-shirts</a></span>
						<br>
						<span class="price"><span class="amount">&pound;20.00</span></span>
					</div>
					</a>
				</div>
				</li>
				<li class="post-73 product type-product status-publish has-post-thumbnail product_cat-posters sale shipping-taxable purchasable product-type-simple product-cat-posters instock">
				<div class='tw_product_container'>
					<a href="/homes/#">
					<span class="onsale">Sale!</span>
					</a>
					<div class='thumbnail_container'>
						<img src="/homes/upload/poster_3_up-370x370.jpg" alt="poster_3_up">
						<div class="product-hover-overlay">
							<span class='cart-load'></span>
						</div>
						<div class='tw_cart_buttons button'>
							<a href='#'><i class='fa fa-shopping-cart'></i></a><a href='#'><i class='fa fa-search'></i></a>
						</div>
					</div>
					<a href='#'>
					<div class='tw_product_header'>
						<h3>Premium Quality</h3>
						<span class="posted_in"><a href="/homes/#" rel="tag">Posters</a></span>
						<br>
						<span class="price"><del><span class="amount">&pound;15.00</span></del><ins><span class="amount">&pound;12.00</span></ins></span>
					</div>
					</a>
				</div>
				</li>
				<li class="last post-375 product type-product status-publish has-post-thumbnail product_cat-clothing product_cat-t-shirts pa_color-black pa_color-green shipping-taxable purchasable product-type-variable product-cat-clothing product-cat-t-shirts instock">
				<div class='tw_product_container'>
					<a href="/homes/#">
					</a>
					<div class='thumbnail_container'>
						<img src="/homes/upload/T_4_front-370x370.jpg" alt="T_4_front">
						<div class="product-hover-overlay">
							<span class='cart-load'></span>
						</div>
						<div class='tw_cart_buttons button'>
							<a href='#'><i class='fa fa-shopping-cart'></i></a><a href='#'><i class='fa fa-search'></i></a>
						</div>
					</div>
					<a href='#'>
					<div class='tw_product_header'>
						<h3>Ship Your Idea</h3>
						<span class="posted_in"><a href="/homes/#" rel="tag">Clothing</a>, <a href="/homes/#" rel="tag">T-shirts</a></span>
						<br>
						<span class="price"><span class="amount">&pound;20.00</span></span>
					</div>
					</a>
				</div>
				</li>
			</ul>
			<div class='waves-pagination'>
				<ul class='page-numbers'>
					<li><span class='page-numbers current'>1</span></li>
					<li><a class='page-numbers' href='#'>2</a></li>
					<li><a class='page-numbers' href='#'>3</a></li>
					<li><a class="next page-numbers" href="/homes/#"><i class="fa fa-angle-double-right"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="waves-sidebar right-sidebar">
			<section id="sidebar" class="clearfix"><aside class="widget widget_search" id="search-4">
			<form role="search" method="get" id="searchform" action="#">
				<div class="input">
					<input type="text" value="" name="s" id="s" placeholder="Search Here">
					<i class="button-search fa fa-search"></i>
				</div>
			</form>
			</aside>

			<aside class="widget woocommerce widget_price_filter" id="woocommerce_price_filter-2">
			<div class="waves-title">
				<h3 class="widget-title">Filter by price</h3>
			</div>
			<form method="get" action="#">
				<div class="price_slider_wrapper">
					<div class="price_slider" style="display:none;">
					</div>
					<div class="price_slider_amount">
						<input type="text" id="min_price" name="min_price" value="" data-min="2" placeholder="Min price">
						<input type="text" id="max_price" name="max_price" value="" data-max="35" placeholder="Max price">
						<button type="submit" class="button">Filter</button>
						<div class="price_label" style="display:none;">
							 Price: <span class="from"></span> &mdash; <span class="to"></span>
						</div>
						<div class="clear">
						</div>
					</div>
				</div>
			</form>
			</aside>

			<aside class="widget woocommerce widget_products" id="woocommerce_products-2">
			<div class="waves-title">
				<h3 class="widget-title">Products</h3>
			</div>
			<ul class="product_list_widget">
				<li>
				<a href="/homes/#" title="Woo Single #2">
				<img width="90" height="90" src="/homes/upload/cd_6_angle-90x90.jpg" class="attachment-shop_thumbnail wp-post-image" alt="cd_6_angle"><span class="product-title">Woo Single #2</span>
				</a>
				<del><span class="amount">&pound;3.00</span></del><ins><span class="amount">&pound;2.00</span></ins></li>
				<li>
				<a href="/homes/#" title="Woo Album #4">
				<img width="90" height="90" src="/homes/upload/cd_5_angle-90x90.jpg" class="attachment-shop_thumbnail wp-post-image" alt="cd_5_angle"><span class="product-title">Woo Album #4</span>
				</a>
				<span class="amount">&pound;9.00</span></li>
				<li>
				<a href="/homes/#" title="Woo Single #1">
				<img width="90" height="90" src="/homes/upload/cd_4_angle-90x90.jpg" class="attachment-shop_thumbnail wp-post-image" alt="cd_4_angle"><span class="product-title">Woo Single #1</span>
				</a>
				<span class="amount">&pound;3.00</span></li>
			</ul>
			</aside>

			<aside class="widget woocommerce widget_top_rated_products" id="woocommerce_top_rated_products-2">
			<div class="waves-title">
				<h3 class="widget-title">Top Rated Products</h3>
			</div>
			<ul class="product_list_widget">
				<li>
				<a href="/homes/#" title="Woo Album #4">
				<img width="90" height="90" src="/homes/upload/cd_5_angle-90x90.jpg" class="attachment-shop_thumbnail wp-post-image" alt="cd_5_angle"><span class="product-title">Woo Album #4</span>
				</a>
				<br>
				<span class="amount">&pound;9.00</span></li>
				<li>
				<a href="/homes/#" title="Happy Ninja">
				<img width="90" height="90" src="/homes/upload/T_7_front-90x90.jpg" class="attachment-shop_thumbnail wp-post-image" alt="T_7_front"><span class="product-title">Happy Ninja</span>
				</a>
				<br>
				<span class="amount">&pound;18.00</span></li>
				<li>
				<a href="/homes/#" title="Ninja Silhouette">
				<img width="90" height="90" src="/homes/upload/T_5_front-90x90.jpg" class="attachment-shop_thumbnail wp-post-image" alt="T_5_front"><span class="product-title">Ninja Silhouette</span>
				</a>
				<br>
				<span class="amount">&pound;20.00</span></li>
			</ul>
			</aside>

			<aside class="widget woocommerce widget_layered_nav" id="woocommerce_layered_nav-2">
			<div class="waves-title">
				<h3 class="widget-title">Filter by</h3>
			</div>
			<ul>
				<li><a href="/homes/#">Black</a><span class="count">(2)</span></li>
				<li><a href="/homes/#">Blue</a><span class="count">(1)</span></li>
				<li><a href="/homes/#">Green</a><span class="count">(1)</span></li>
			</ul>
			</aside>
			</section>
		</div>
	</div>
</div>
</section>
<!-- End Main -->
@stop

@section('js')

@stop
		
