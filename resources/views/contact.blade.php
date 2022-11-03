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
							<li>TVs</li>
							<li>Dishwasher</li>
							<li>Ranges</li>
							<li>Computer</li>
							<li>Blu-ray & DVD Player</li>
							<li>Projectors</li>
							<li>Hometheater System</li>
							<li>Cameras</li>
							<li>Camcorders</li>
							<li>Washer & Dryers</li>
							<li>Refrigerators</li>
							<li>Microwaves</li>
						</ul>
					</div>
				</div>
				<div class="contact">
					<div class="contact-us">
						<p>CONTACT US</p>
					</div>
					<div class="costomer-info">
						<div class="costomer-service">
							<p>Customer Service:91 7508115758</p>
							<p>Ludhiana,Punjab,INDIA</p>
							<p>Yorex Infotec.</p>
						</div>
						<hr class="hr">
						<div class="info">
							<div class="required-info">
								<h4>Contact Us</h4>
								<p>Have a question? We have 24x7 Costomer Service.</p>
								<p>Befor you contact us,skim through our self Serve opton and Frequently Asked Question for Quicker answer.</p>
								<p>Want to know more about the status of the orders?</p>
								<p>Login to view our order.</p>
							</div>
						</div>
						<div class="border">
							<div class="border-1">
								<div class="border-2">
									<p>Contact Us</p>
								</div>
								<div class="requir-info">
									<span>*Required information</span>
								</div>
								<div class="input-info">
									<div class="input-information">
										<form>
											<table class=" form">
												<tr>
													<td ><p>full Name* </p></td>
													<td><input type="text" name=""></td>
												</tr>
												<tr>
													<td > <p>E-mail Address </p></td>
													<td><input type="text" name=""></td>
												</tr>
												<tr>
													<td> <p>Message</p></td>
													<td><textarea></textarea></td>
												</tr>
											</table>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="snd-btn">
							<button>Send Now</button>
						</div>
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
</body>
@endsection
@else
 <body>
        <h4>Please Login to Continue</h4>
        <a href="login">login</a>
    </body>
    @endif