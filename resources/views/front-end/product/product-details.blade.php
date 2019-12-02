@extends('front-end.master')
@section('body')
		<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Single</span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content">
			<!--single-->
			<div class="single-wl3">
				<div class="container">
					<div class="single-grids">
						<div class="col-md-9 single-grid">
							<div clas="single-top">
								<div class="single-left">
									<div class="flexslider">
										<ul class="slides">
			@foreach($multiple_images as $multiple_image)
											<li data-thumb="{{asset($multiple_image->multiple_image)}}">

						@endforeach
												<div class="thumb-image"> <img src="
													{{
														asset($product->product_image)}}" data-imagezoom="true" class="img-responsive"> </div>
											</li>
										
										
										 </ul>
									</div>
								</div>
								<div class="single-right simpleCart_shelfItem">
									<h4> {{$product->product_name}} </h4>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<p class="price item_price">{{$product->product_price}}</p>
									<div class="description">
										<p><span>Quick Overview</span>{{$product->product_short_description}}</p>
									</div>
							{{Form::open(['route'=>'add-to-cart','method'=>'POST'])}}
									<div class="color-quality">
										<h6>Quality :</h6>
											<div class="quantity"> 
												<input type="number" name="qty" value="1" min="1">
												<input type="hidden" name="id" value="{{$product->id }}">	
														</div>
									</div>
									<div class="women">
										<span class="size">{{$product->product_size}}</span>
										<!-- <a href="{{route('add-to-cart')}}" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a> -->
										<input type="submit" name="cart" value="Add To Cart" class="my-cart-b item_add">
									</div>
									{{Form::close()}}
									<div class="social-icon">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="col-md-3 single-grid1">
							<h3>Recent Products</h3>
						@foreach($nextproducts as $nextproduct )
							<div class="recent-grids">
								<div class="recent-left">
									<a href="{{route('product-details',['id'=>$nextproduct->id,'name'=>$nextproduct->product_name])}}" class="new-gri">
									<img  src="{{asset($nextproduct->product_image)}}" class="img-responsive" alt="">
									</a>	
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="">{{$nextproduct->product_name}} </a></h6>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<span class=" price-in1">{{$nextproduct->product_price}}</span>
								</div>	
								<div class="clearfix"> </div>
							</div>
							@endforeach
							<div class="recent-grids">
							<!-- 	<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="{{asset('/')}}front-end/images/r1.jpg" alt=""></a>	
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<span class=" price-in1"> $ 19.00</span>
								</div>	
								<div class="clearfix"> </div> -->
							</div>
							<div class="recent-grids">
						<!-- 		<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="{{asset('/')}}front-end/images/r2.jpg" alt=""></a>	
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<span class=" price-in1"> $ 19.00</span>
								</div>
								<div class="clearfix"> </div>  -->
							</div>
							<div class="recent-grids">
							<!--  	<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="{{asset('/')}}front-end/images/r3.jpg" alt=""></a>	
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
									<div class="block">
									<div class="starbox small ghosting"> </div>
									</div> 
									<span class=" price-in1">$ 45.00</span>
								</div>	
								<div class="clearfix"> </div> -->
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					
						<div class="product-w3agile">
							<h3 class="tittle1">Product Description</h3>
							<div class="product-grids">
								<div class="col-md-4 product-grid">
									<div id="owl-demo" class="owl-carousel">
										<div class="item">
											<!-- <div class="recent-grids">
											<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="{{asset('/')}}front-end/images/r.jpg" alt=""></a>	
												</div>
											<div class="recent-right">
													<h6 class="best2"><a href="single.html">Good Products </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1"> $ 29.00</span>
												</div>	
												<div class="clearfix"> </div>
											</div> 
											<!-- <div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="{{asset('/')}}front-end/images/r1.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1"> $ 19.00</span>
												</div>	
												<div class="clearfix"> </div>
											</div> -->
											<!-- <div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="{{asset('/')}}front-end/images/r2.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1"> $ 19.00</span>
												</div>
												<div class="clearfix"> </div>
											</div> -->
										<!-- 	<div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="{{asset('/')}}front-end/images/r3.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1">$ 45.00</span>
												</div>	
												<div class="clearfix"> </div>
											</div> -->

										</div>
										<div class="item">
											<!-- <div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="{{asset('/')}}front-end/images/r4.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1"> $ 29.00</span>
												</div>	
												<div class="clearfix"> </div>
											</div> -->
											<!-- <div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="{{asset('/')}}front-end/images/r5.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1"> $ 19.00</span>
												</div>	
												<div class="clearfix"> </div>
											</div> -->
											<!-- <div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="{{asset('/')}}front-end/images/r2.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1"> $ 19.00</span>
												</div>
												<div class="clearfix"> </div>
											</div> -->
											<!-- <div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="{{asset('/')}}front-end/images/r3.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1">$ 45.00</span>
												</div>	
												<div class="clearfix"> </div>
											</div> -->
										</div>
									</div>
									<img class="img-responsive " src="{{asset('/')}}front-end/images/googlehome.jpg"alt="">
								</div>
							<div class="col-md-8 product-grid1">
									<div class="tab-wl3">
										<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
											<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
												<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
						<li role="presentation"><a href="#reviews" role="tab" id="reviews-tab" data-toggle="tab" aria-controls="reviews"> Reviews </a></li>

											</ul>
											<div id="myTabContent" class="tab-content">
												<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
													<div class="descr">
														<h4>{{$product->product_short_description}}</h4>
														<p>{{$product->product_long_description}}</p>
														
															
														
												</div>
												<div role="tabpanel" class="tab-pane fade" id="reviews" aria-labelledby="reviews-tab">
													<div class="descr">
														<div class="reviews-top">
															
														<!-- 	<div class="reviews-right">
															</div>
															<div class="clearfix"></div> -->
														</div>
														<div class="reviews-bottom">
															<h4>write your review</h4>
															
															<p>Your Rating</p>
															<div class="block">
									<div class="starbox small ghosting"><div class="positioner"><div class="stars"><div class="ghost" style="width: 42.5px; display: none;"></div><div class="colorbar" style="width: 42.5px;"></div><div class="star_holder"><div class="star star-0"></div><div class="star star-1"></div><div class="star star-2"></div><div class="star star-3"></div><div class="star star-4"></div></div></div></div></div>
															</div>
								{{Form::open(['route'=>'product_reviews','method'=>'post'])}}
								<h3 style="text-align: center; background-color: green;">{{Session::get('message')}}</h3>
										<label>Your Review </label>
										<textarea type="text" Name="review" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
																<div class="row">
										<div class="col-md-6 row-grid">
											
											
									<label>Name</label>
									<input type="text" value="name" Name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
																</div>
											<div class="col-md-6 row-grid">
					<label>Address</label>
				<input type="text" value="Address" Name="address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="">
					</div>
					<div class="clearfix"></div>
																</div>
																<input type="submit" value="SEND">
															{{Form::close()}}
														</div>
													</div>
												</div>
												<div role="tabpanel" class="tab-pane fade" id="custom" aria-labelledby="custom-tab">
													
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					<!--Product Description-->
				</div>
			</div>
			<!--single-->
			
			<div class="new-arrivals-w3agile">
					<div class="container">
						<h3 class="tittle1">Best Sellers</h3>
						<div class="arrivals-grids">
							@foreach($nextproducts as $nextproduct)
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="{{route('product-details',['id'=>$nextproduct->id,'name'=>$nextproduct->product_name])}}">
												<div class="grid-img">
													<img  src="{{asset($nextproduct->product_image)}}" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="{{asset($nextproduct->	product_image)}}" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben">
										<p>NEW</p>
									</div>
									<div class="ribben1">
										<p>SALE</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">
									 {{$nextproduct->product_name}}</a></h6>
										<span class="size">
									{{$nextproduct->product_size}}</span>
										<p><em class="item_price">
								{{$nextproduct->product_price}}</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
								
							</div>
							@endforeach
							
							<!-- <div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="{{asset('/')}}front-end/images/p30.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="{{asset('/')}}front-end/images/p29.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben2">
										<p>OUT OF STOCK</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">XL / XXL / S </span>
										<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="{{asset('/')}}front-end/images/s2.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="{{asset('/')}}front-end/images/s1.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben1">
										<p>SALE</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">XL / XXL / S </span>
										<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div> -->
					<!-- 		<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="{{asset('/')}}front-end/images/s4.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="{{asset('/')}}front-end/images/s3.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben">
										<p>NEW</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">XL / XXL / S </span>
										<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
						</div> -->
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--new-arrivals-->
		</div>
	</div>




@endsection