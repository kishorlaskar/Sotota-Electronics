@extends('front-end.master')
@section('title')
BRAND
@endsection

@section('body')
	<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Brand</span></h3>
			</div>
		</div>
	<!--banner-->
		<!--content-->
			<div class="content">
				<div class="products-agileinfo">
						<h2 class="tittle">Women's Wear</h2>
					<div class="container">
						<div class="product-agileinfo-grids w3l">
							<div class="col-md-3 product-agileinfo-grid">
								<div class="categories">
									<h3>Categories</h3>
									<ul class="tree-list-pad">
									@foreach($catagoreys as $catagorey)

									<li class="active"><a href="{{route('product-catagorey',['id'=>$catagorey->id])}}" class="act">{{$catagorey->catagorey_name}}</a></li>	
					
									@endforeach
					
									
									</ul>
								</div>
								<div class="price">
									<h3>Price Range</h3>
									<ul class="dropdown-menu6">
										<li>                
											<div id="slider-range"></div>						
												
											<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
										</li>			
									</ul>
									<script type='text/javascript'>//<![CDATA[ 
									$(window).load(function(){
									 $( "#slider-range" ).slider({
												range: true,
												min: 90,
												max: 170000,
												values: [ 90, 170000 ],
												slide: function( event, ui ) {  $( "#amount" ).val( "Tk" + ui.values[ 0 ] + " - Tk" + ui.values[ 1 ] );
												}
									 });
									$( "#amount" ).val( "Tk" + $( "#slider-range" ).slider( "values", 0 ) + " - Tk" + $( "#slider-range" ).slider( "values", 1 ) );

									});//]]>  

									</script>
									<script type="text/javascript" src="{{asset('/')}}front-end/js/jquery-ui.js"></script>
								</div>
								<div class="top-rates">
									<h3>Top Rates products</h3>
									<div class="recent-grids">
										<div class="recent-left">
											<a href="single.html"><img class="img-responsive " src="{asset('/')}}front-end/images/r.jpg" alt=""></a>	
										</div>
										<div class="recent-right">
											<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
											<p><del>$100.00</del> <em class="item_price">$09.00</em></p>
										</div>	
										<div class="clearfix"> </div>
									</div>
									<div class="recent-grids">
										<div class="recent-left">
											<a href="single.html"><img class="img-responsive " src="{{asset('/')}}front-end/r1.jpg" alt=""></a>	
										</div>
										<div class="recent-right">
											<h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
											<p><del>$100.00</del> <em class="item_price">$19.00</em></p>
										</div>	
										<div class="clearfix"> </div>
									</div>
									<div class="recent-grids">
										<div class="recent-left">
											<a href="single.html"><img class="img-responsive " src="{{asset('/')}}front-end/images/r2.jpg" alt=""></a>	
										</div>
										<div class="recent-right">
											<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
											<p><del>$100.00</del> <em class="item_price">$39.00</em></p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="recent-grids">
										<div class="recent-left">
											<a href="single.html"><img class="img-responsive " src="{{asset('/')}}front-end/images/r3.jpg" alt=""></a>	
										</div>
										<div class="recent-right">
											<h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
											<p><em class="item_price">$39.00</em></p>
										</div>	
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="brand-w3l">
									<h3>Brands Filter</h3>
									<ul>
											@foreach($brands as $brand)

									<li class="active">
										<a href="{{route('product-brand',['id'=>$brand->id])}}" class="act">{{$brand->brand_name}}</a></li>	
					
									@endforeach
									</ul>
								</div>
								<div class="cat-img">
									<img class="img-responsive " src="{{asset('/')}}front-end/images/45.jpg" alt="">
								</div>
							</div>
							<div class="col-md-9 product-agileinfon-grid1 w3l">
								<div class="product-agileinfon-top">
									<div class="col-md-6 product-agileinfon-top-left">
										<img class="img-responsive " src="{{asset('/')}}front-end/images/img1.jpg" alt="">
									</div>
									<div class="col-md-6 product-agileinfon-top-left">
										<img class="img-responsive " src="{{asset('/')}}front-end/images/img2.jpg" alt="">
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="mens-toolbar">
									<p >Showing 1–9 of 21 results</p>
									 <p class="showing">Sorting By
										<select>
											  <option value=""> Name</option>
											  <option value="">  Rate</option>
												<option value=""> Color </option>
												<option value=""> Price </option>
										</select>
									  </p> 
									  <p>Show
										<select>
											  <option value=""> 9</option>
											  <option value="">  10</option>
												<option value=""> 11 </option>
												<option value=""> 12 </option>
										</select>
									  </p>
									<div class="clearfix"></div>		
								</div>
								<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
									<ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">
										<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
									<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><img src="{{asset('/')}}front-end/images/menu1.png"></a></li>
									<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"><img src="{{asset('/')}}front-end/images/menu.png"></a></li>
									</ul>
									<div id="myTabContent" class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
												@foreach($brandProducts as $brandProduct)
											<div class="product-tab">
												<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
										<div class="grid-img">
									<img  src="{{asset($brandProduct->product_image)}}" class="img-responsive" alt="">
																	</div>
																	<div class="grid-img">
											<img  src="{{asset($brandProduct->product_image)}}" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
														</div>
														<div class="block">
															<div class="starbox small ghosting"> </div>
														</div>
														<div class="women">
															<h6><a href="single.html">{{$brandProduct->product_name}}</a></h6>
															<span class="size">{{$brandProduct->product_size}}</span>
															<p >Tk.<em class="item_price">{{$brandProduct->product_price}}</em></p>
															<a href="" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
														</div>
													</div>
												</div>
											
												@endforeach
												<div class="clearfix"></div>
											</div>
											<div class="product-tab prod1">
												
											<!-- 	<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i4.jpg" class="img-responsive" alt="">
																	</div>
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i3.jpg" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
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
											<!-- 	<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i6.jpg" class="img-responsive" alt="">
																	</div>
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i5.jpg" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
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
											<div class="product-tab">
												<!-- <div class="col-md-4 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i8.jpg" class="img-responsive" alt="">
																	</div>
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i7.jpg" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
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
												<!-- <div class="col-md-4 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i10.jpg" class="img-responsive" alt="">
																	</div>
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i9.jpg" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
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
											<!-- 	<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i12.jpg" class="img-responsive" alt="">
																	</div>
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i11.jpg" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
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
											<div class="product-tab prod2">
												<!-- <div class="col-md-4 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i8.jpg" class="img-responsive" alt="">
																	</div>
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i7.jpg" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
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
												<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i14.jpg" class="img-responsive" alt="">
																	</div>
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i13.jpg" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
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
												<!-- <div class="col-md-4 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i2.jpg" class="img-responsive" alt="">
																	</div>
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i1.jpg" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
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
										<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
											<div class="product-tab1">
												@foreach($brandProducts as $brandProduct)
												<div class="col-md-4 product-tab1-grid">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
										<div class="grid-img">
						<img  src="{{asset($brandProduct->product_image)}}" class="img-responsive" alt="">
										</div>
								<div class="grid-img">
								<img  src="{{asset($brandProduct->product_image)}}" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
														</div>
													</div>
												</div>
												<div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<div class="women">
														<h6><a href="single.html">{{$brandProduct->product_name}}</a></h6>
														<span class="size">{{$brandProduct->product_size}}</span>
														<p>{{$brandProduct->product_short_description}} <p>
														<p ><em class="item_price">{{$brandProduct->product_price}}</em></p>
														<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
													</div>
												</div>
												@endforeach
												<div class="clearfix"></div>
											</div>
											<div class="product-tab1 prod3">
												<!-- <div class="col-md-4 product-tab1-grid">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i2.jpg" class="img-responsive" alt="">
																	</div>
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i1.jpg" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
														</div>
													</div>
												</div>
												<div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<div class="women">
														<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
														<span class="size">XL / XXL / S </span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; Refert tamen, quo modo. Quod autem meum munus dicis non equidem recuso, sed te adiungo socium. </p>
														<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
														<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
													</div>
												</div> -->
												<div class="clearfix"></div>
											</div>
											<div class="product-tab1">
												<!-- <div class="col-md-4 product-tab1-grid">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i4.jpg" class="img-responsive" alt="">
																	</div>
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i3.jpg" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
														</div>
														
													</div>
												</div>
												<div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<div class="women">
														<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
														<span class="size">XL / XXL / S </span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; Refert tamen, quo modo. Quod autem meum munus dicis non equidem recuso, sed te adiungo socium. </p>
														<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
														<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
													</div>
												</div> -->
												<div class="clearfix"></div>
											</div>
											<div class="product-tab1 prod3">
												<!-- <div class="col-md-4 product-tab1-grid">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i6.jpg" class="img-responsive" alt="">
																	</div>
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i5.jpg" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
														</div>
														
													</div>
												</div>
												<div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<div class="women">
														<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
														<span class="size">XL / XXL / S </span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; Refert tamen, quo modo. Quod autem meum munus dicis non equidem recuso, sed te adiungo socium. </p>
														<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
														<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
													</div>
												</div> -->
												<div class="clearfix"></div>
											</div>
											<!-- <div class="product-tab1">
												<div class="col-md-4 product-tab1-grid">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i8.jpg" class="img-responsive" alt="">
																	</div>
																	<div class="grid-img">
																		<img  src="{{asset('/')}}front-end/images/i7.jpg" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>	
														</div>
													</div>
												</div>
												<div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<div class="women">
														<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
														<span class="size">XL / XXL / S </span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Atqui iste locus est, Piso, tibi etiam atque etiam confirmandus, inquam; Refert tamen, quo modo. Quod autem meum munus dicis non equidem recuso, sed te adiungo socium. </p>
														<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
														<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
													</div>
												</div> -->
												<div class="clearfix"></div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		<!--content-->

@endsection