		<div class="header">
			<div class="header-top">
				<div class="container">
					 <div class="top-left">
						<a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +01302455402</a>
					</div>
					<div class="top-right">
					<ul>
						@if(Session::get('customerId'))
						<li><a href="{{route('checkout-shipping')}}">Checkout</a></li>
						@else
						<li><a href="{{route('new-customer-login')}}">Checkout</a></li>
						@endif
						@if(Session::get('customerId'))
						<li><a href="#" onclick="document.getElementById('customerLogOutForm').submit();">Logout</a></li>
						{{Form::open(['route' =>'customer-logout','id'=>'customerLogOutForm','method'=>'post'])}}
                       

						{{Form::close()}} 
						@else
						<li><a href="{{route('new-customer-login')}}">LogIn</a></li>
						<li><a href="{{route('new-customer-login')}}"> Create Account </a></li>
						@endif
					
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="heder-bottom">
				<div class="container">
					<div class="logo-nav">
						<div class="logo-nav-left">
							<h1><a href="{{route('/')}}">সততা ইলেকট্রনিক্স <span>Shop anywhere</span></a></h1>
						</div>
						<div class="logo-nav-left1">
							<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">

									@foreach($catagoreys as $catagorey)

									<li class="active"><a href="{{route('product-catagorey',['id'=>$catagorey->id])}}" class="act">{{$catagorey->catagorey_name}}</a></li>	
					
									@endforeach
									<!-- Mega Menu -->
							
									
									
								</ul>
							</div>
							</nav>
						</div>
						<div class="logo-nav-right">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
							{{ Form::open(['route'=>'search-product', 'method'=>'POST','class'=>'form-horizontal']) }}
							<div id="cd-search" class="cd-search">
							 
									
									<input name="SearchData" type="search" placeholder="Search...">
									
								   
							</div>
							{{ Form::close() }}	
						</div>
						<div class="header-right2">
							<div class="cart box_1">
								<a href="{{route('show-cart')}}">
									<h3> <div class="total">
										<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
										<img src="{{asset('/')}}front-end/images/bag.png" alt="" />
									</h3>
								</a>
								<p><a href="javascript;" class="simpleCart_empty">Empty Cart</a></p>
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>