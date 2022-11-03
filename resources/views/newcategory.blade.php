@extends('layouts.app')
@section('content')

</head>
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
				<div class="list" style="width: 850px;">
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
				</div>
			</div>
		</div>
		<div class="null">
			
		</div>
		<div class="main-categorious">
			
			<div class="sign-up">
				<div class="sign" >
					<div  class="user-info">
						<form action="{{url('add_category')}}" method="post">
							@csrf
							<table class="login-1">
								<tr class="inpt-1">
									<td ><span>Category name</span></td>
									<td><input type="text" name="category_name"></td>
								</tr>
								<tr class="logn-btn" >
									<td></td>
									<td><input class="log" type="submit" name="save" value="save">
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
</html>
@endsection 