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
		<div class="home-page">
		 	<div class="pagnation">
				<div class="list">
					<ul>
						<a href="home"><li>HOME</li></a>
						<a href="add_product"><li>NEW PRODUCT</li></a>
						<a href="#"><li>MY CART</li></a>
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
				<div class="categorious">
					<div class="cate-heading">
						<p>CATEGORIES</p>
					</div>
					<div class="items">
						<ul>
							@foreach($data as $category)
							<li>{{$category->category_name}}</li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="contact">
					
					<div class="contact-us">
						<p>{{$findrecord[0]->p_name}}</p>
					</div>

					<div class="dish-info" style="display: flex;">
						<div class="machine-pic">
							<div class="img">
								<img src="{{ asset('upload_image/'. $findrecord[0]->p_image)}}">
							</div>
							<div class="stock">
								<p>In Stock:</p>
							</div>
							
						</div>
						<div class="machine-info">
							<div class="washer">
								<p>{{$findrecord[0]->p_name}}</p>
							</div>
							<div class="model-info" style="margin-top:0px;">
								<span>Model:{{$findrecord[0]->p_model}}</span>
								<p>Manufacturer:{{$findrecord[0]->p_manufacturer}}</p>
							</div>
							<div class="price" style="margin-top: 10px;">
								<span>$ {{$findrecord[0]->p_prize}}</span>
							</div>
							<div class="quantity">
								<form action="{{url('cart')}}" method="post">
									{{csrf_field()}}
									<table>
										<input type="hidden" name="product_price" value="{{$findrecord[0]->p_prize}}">
										<input type="hidden" name="product_id" value="{{$findrecord[0]->id}}">
										<tr>
											<td class="qty">Enter quantity</td>
											<td><input type="text" name="quantity"></td>
										</tr>
										<tr>
											<td>
												<div class="checkout">
													<input type="submit" name="save" value="Add to Cart">
												</div>
											</td>
										</tr>
										
									</table>
								</form>
								
							</div>
							
						</div>
						
					</div>
					
					<!-- --- -->
					
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














   <!--  <div class="info">
   	<a href="{{url('/mycart')}}">
							<div class="checkout">
								<input type="submit" name="" value="checkout">
							</div>
							</a>
						<form>
							<table class="table-info">
								<tr>
									<td class="nme">Enter name</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="nme">Enter Email</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="nme">Enter Review</td>
									<td><textarea></textarea></td>
								</tr>
								<tr>
									<td class="nme">Rating</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="btnn-1">
										<input type="submit" name="" value="Submit query">
									</td>
								</tr>
							</table>
						</form>
					</div> -->