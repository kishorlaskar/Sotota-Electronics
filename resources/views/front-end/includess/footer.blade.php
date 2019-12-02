					<div class="footer-w3l">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-3 footer-grid">
									<h4>About </h4>
									<p>Sotota Electronics is a new e-comarce site for a specific real life shop.By this website any customer can buy Android phone and it's related things. </p>
									<div class="social-icon">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Information</h4>
									<ul>
										<li><a href="{{route('/')}}">Home</a></li>
										<li><a href="{{route('rules')}}">Rules</a></li>
										<li><a href="login.html">FAQ</a></li>
											@if(Session::get('customerId'))
						<li><a href="{{route('checkout-shipping')}}">Checkout</a></li>
						@else
						<li><a href="{{route('new-customer-login')}}">Checkout</a></li>
						@endif
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>Brands</h4>
									<ul>
		                            @foreach($brands as $brand)

									<li class="active">
										<a href="{{route('product-brand',['id'=>$brand->id])}}" class="act">{{$brand->brand_name}}</a></li>	
					
									@endforeach
									</ul>
								</div>
								<div class="col-md-3 footer-grid foot">
									<h4>Contacts</h4>
									<ul>
										<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="#">Shop No: 7 NS Road,Kushtia </a></li>
										<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">01302455402</a></li>
										<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:"> sototatelecom704@gmail.com</a></li>
										
									</ul>
								</div>
							<div class="clearfix"> </div>
							</div>
							
						</div>
					</div>
					<!---footer--->