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
			
			<div class="sign-up">
				<div class="sign" >
					<p>Add Product</p>
					<div  class="user-info">
						<form action="{{url('add_product')}}" method="post" 
						enctype="multipart/form-data">
						@csrf
						<table class="login-1">
							<tr class="inpt-1">
								<td ><span>CATEGORY NAME</span></td>
								<td>
									<select  class="form-select" name="p_category"
									style="width:186px">
									<option value="">Select Category</option>
									@foreach($data as $row)
									<option value="{{$row->category_name}}">{{$row->category_name}}</option>
									@endforeach
								</select>
							</td>
						</tr>
						<tr class="inpt-1">
							<td ><span>PRODUCT NAME</span></td>
							<td><input type="text" name="p_name"></td>
						</tr>
						<tr class="inpt-1">
							<td ><span>MODEL NAME</span></td>
							<td><input type="text" name="p_model"></td>
						</tr>
						<tr class="inpt-1">
							<td ><span>MODEL PRIZE</span></td>
							<td><input type="text" name="p_prize"></td>
						</tr>
						<tr class="inpt-1">
							<td ><span>MANUFACTURE </span></td>
							<td><input type="text" name="p_manufacturer"></td>
						</tr>
						<tr class="inpt-1">
							<td ><span>PRODUCT IMAGE</span></td>
							<td>
								<input type="file" name="p_image" style="width:170px">
							</td>
						</tr>
						

						<tr class="logn-btn" >
							<td></td>
							<td><input class="log" type="submit" name="save" value="SAVE">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<div class="footer-1">
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