
@if($errors->any())
<h4>{{$errors->first()}}</h4>
@endif
@if (session()->has('msg'))
<h4>{{ session()->get('msg') }}</h4>
@endif
@if (session()->has('session'))
@extends('layouts.app')
@section('content')
<body>
	<div class="main-div">
		<div class="head-div">
			<div class="main">
				<div class="head">
					<span>EVEST</span>
					<p>THE BIGGEST CHOICE OF THE WEB</p>
				</div>
				<div class="btn">
					<a href="login"><input type="button" name="" value="Log Out"></a>
				</div>
			</div>
		</div>
		<p></p>
		<div class="home-page">
			<div class="pagnation">
				<div class="list">
					<ul>
						<a href="home"><li>HOME</li></a>
						<a href="add_product"><li>NEW PRODUCT</li></a>
						<a href="mycart"><li>MY CART</li></a>
						<a href="all_products"><li>ALL PRODUCTS</li></a>
						<a href="#"><li>REVIEWS</li></a>
						<a href="contact"><li>CONTACT</li></a>
						<a href="#"><li>FAQS</li></a>

					</ul>
				</div>
				<div class="search">
					<div class="search-1">
						<div class="input">
							<input type="text" name="">
						</div>
						<div class="btnn">
							<input type="button" name="" value="Search">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="null">
		</div>
		<div class="main-categorious">
			<div class="footer">
				<div class="main-img">
					<img src="images/16.png">
				</div>
				<div class="categorious">
					<div class="cate-heading">
						<p>CATEGORIES</p>
					</div>
					<div class="items">
						<ul>
							@isset($data)
							@foreach($data as $category)
							<a href="{{url('/findid/'.$category->id)}}">
								<li>{{$category->category_name}}</li>
							</a>
							@endforeach
							@endisset
						</ul>
					</div>
				</div>
				<div class="contact">
					<div class="contact-us">
						<p>FEATURED PRODUCTS</p>
					</div>
					<div class="Camera-info">

						@foreach($productdata as $row)
						<div class="samsung-cam" style="height: auto;padding: 12px 3px;">
							<div class="cam-info">
								<!-- img src="'upload_image/'. $row->p_image"> -->
								<img src="{{ asset('upload_image/'.$row->p_image) }}">
								<div class="sam-prc">
									<span>{{$row->p_name}}</span>
									<p>$ 			{{$row->p_prize}}</p>
								</div>
								<hr class="hr2">
								<div class="cart-btn">
									<i class="fa fa-plus-circle iconn" aria-hidden="true"></i> 
									<i class="fa fa-shopping-cart" aria-hidden="true"></i>
									<i class="fa fa-plus" aria-hidden="true"></i>
									<i class="fa fa-cart-plus" aria-hidden="true"></i> 
									<a href="{{'add_to_cart_display/'.$row->id}}">
										<input type="submit" name="" value="Add to cart">
									</a>
								</div>
							</div>
						</div>
						@endforeach
						<!-- --- -->
						
						<!-- -- -->
					</div>
				</div>
				<div class="list-1">
					<ul>
						<li>HOME</li>
						<li>NEW PROJECT</li>
						<li>SPECIAL</li>
						<li>ALL PRODUCTS</li>
						<li>REVIEWS</li>
						<li>CONTACT</li>
						<li>FAQS</li>
					</ul>
				</div>
				<div class="footer-2">
					<p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i>2013 Enest.Privacy Notice</p>
				</div>
			</div>
		</div>
	</div>
</body>
@endsection
@else
<body>
	<h4>Please Login to Continue</h4>
	<a href="login">login</a>
</body>
@endif