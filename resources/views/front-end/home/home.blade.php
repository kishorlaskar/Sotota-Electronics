@extends('front-end.master')

@section('title')
HOME
@endsection
@section('body')
	<!--banner-->


		<div class="banner-w3">
			<div class="demo-1">            
				<div id="example1" class="core-slider core-slider__carousel example_1">
					<div class="core-slider_viewport">
						<div class="core-slider_list">
							@foreach($sliders as $slider)
							<div class="core-slider_item">
								<img src="{{asset($slider->slider_image)}}" class="img-responsive" alt="">
							</div>
							@endforeach
						 </div>
					</div>
					<div class="core-slider_nav">
						<div class="core-slider_arrow core-slider_arrow__right"></div>
						<div class="core-slider_arrow core-slider_arrow__left"></div>
					</div>
					<div class="core-slider_control-nav"></div>
				</div>
			</div>
			<link href="{{asset('/')}}front-end/css/coreSlider.css" rel="stylesheet" type="text/css">
			<script src="{{asset('/')}}front-end/js/coreSlider.js"></script>
			<script>
			$('#example1').coreSlider({
			  pauseOnHover: false,
			  interval: 3000,
			  controlNavEnabled: true
			});

			</script>

		</div>	
		<!--banner-->
			<!--content-->
		<div class="content">
			<!--banner-bottom-->
				<div class="ban-bottom-w3l">
					<div class="container">
						<div class="col-md-6 ban-bottom">
							<div class="ban-top">
								<img src="{{asset('/')}}front-end/images/yamahspeakers.jpg" class="img-responsive" alt="" height="100" width="100" />
								<!-- <div class="ban-text">
									<h4></h4>
								</div> -->
								<div class="ban-text2 hvr-sweep-to-top">
									<h4>20% <span>Off/-</span></h4>
								</div>
							</div>
							<div class="ban-top">
								<img src="{{asset('/')}}front-end/images/hppavilion.jpg" class="img-responsive" alt="" />
								<!-- <div class="ban-text">
									<h4></h4>
								</div> -->
								<div class="ban-text2 hvr-sweep-to-top">
									<h4>20% <span>Off/-</span></h4>
								</div>
							</div>
						</div>
						<div class="col-md-6 ban-bottom3">
							<div class="ban-top">
								<img src="{{asset('/')}}front-end/images/basespeaker.jpg" class="img-responsive" alt=""/>
								<div class="ban-text1">
									<h4>Bluetooth Speaker</h4>
								</div>
							</div>
							<div class="ban-img">
								<div class=" ban-bottom1">
									<div class="ban-top">
										<img src="{{asset('/')}}front-end/images/googlehome.jpg" class="img-responsive" alt=""/>
										<div class="ban-text1">
											<h4>Google Home</h4>
										</div>
									</div>
								</div>
								<div class="ban-bottom2">
									<div class="ban-top">
										<img src="{{asset('/')}}front-end/images/handwatch.jpg" class="img-responsive" alt=""/>
										<div class="ban-text1">
											<h4>Hand Watch</h4>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- <div class="clearfix"></div> -->
					</div>
				</div>
			<!--banner-bottom-->
			<!--new-arrivals-->
				<div class="new-arrivals-w3agile">
					<div class="container">
						<h2 class="tittle">New Arrivals</h2>
						<div class="arrivals-grids">
							  @php $i=0;
                            @endphp
							@foreach($newproducts as $newproduct)
							 @if($i<4)
						<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="{{route('product-details',['id'=>$newproduct->id,'name'=>$newproduct->product_name])}}" class="new-gri">
												<div class="grid-img">
													<img  src="{{asset($newproduct->product_image)}}" class="img-responsive" alt="">
												</div>
												 <div class="grid-img">
													<img  src="{{asset($newproduct->product_image)}}" class="img-responsive"  alt="">
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
									{{$newproduct->product_name}}</a></h6>
										<span class="size">{{$newproduct->product_size}}</span>
										<p ><em class="item_price">{{$newproduct->product_price}}</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							@endif
							@php $i++; @endphp
							@endforeach
							
							<br>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--new-arrivals-->
				<!--accessories-->
			<div class="accessories-w3l">
				<div class="container">
					<h3 class="tittle">BEST OF 2019</h3>
					<span>ELECTRONIC USES</span>
					<div class="button">
						<a href="#" class="button1"> Shop Now</a>
						<a href="#" class="button1"> Enjoy Shopping</a>
					</div>
				</div>
			</div>
			<!--accessories-->
			<!--Products-->
				<div class="product-agile">
					<div class="container">
						<h3 class="tittle1"> New Products</h3>
                        <div class="arrivals-grids">

							 
                            
							  @php $i=0;
                            @endphp
							@foreach($newproducts as $newproduct)
							 @if($i<8 && $i >3)
						<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="{{route('product-details',['id'=>$newproduct->id,'name'=>$newproduct->product_name])}}" class="new-gri">
												<div class="grid-img">
													<img  src="{{asset($newproduct->product_image)}}" class="img-responsive" alt="">
												</div>
												 <div class="grid-img">
													<img  src="{{asset($newproduct->product_image)}}" class="img-responsive"  alt="">
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
									{{$newproduct->product_name}}</a></h6>
										<span class="size">{{$newproduct->product_size}}</span>
										<p ><em class="item_price">{{$newproduct->product_price}}</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							@endif
							@php $i++; @endphp
							@endforeach
							<br>
							<div class="clearfix"></div>
					</div>
				</div>
			<!--Products-->
			<div class="latest-w3">
				<div class="container">
					<h3 class="tittle1">Latest Fashion Trends</h3>
					<div class="latest-grids">
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
								<img  src="{{asset('/')}}front-end/images/l1.jpg" class="img-responsive"  alt="">
								<div class="latest-text">
									<h4>Men</h4>
								</div>
								<div class="latest-text2 hvr-sweep-to-top">
									<h4>-50%</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
								<img  src="{{asset('/')}}front-end/images/l2.jpg" class="img-responsive"  alt="">
								<div class="latest-text">
									<h4>Shoes</h4>
								</div>
								<div class="latest-text2 hvr-sweep-to-top">
									<h4>-20%</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
								<img  src="{{asset('/')}}front-end/images/l3.jpg" class="img-responsive"  alt="">
								<div class="latest-text">
									<h4>Women</h4>
								</div>
								<div class="latest-text2 hvr-sweep-to-top">
									<h4>-50%</h4>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="latest-grids">
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
								<img  src="{{asset('/')}}front-end/images/l4.jpg" class="img-responsive"  alt="">
								<div class="latest-text">
									<h4>Watch</h4>
								</div>
								<div class="latest-text2 hvr-sweep-to-top">
									<h4>-45%</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
								<img  src="{{asset('/')}}front-end/images/l5.jpg" class="img-responsive"  alt="">
								<div class="latest-text">
									<h4>Bag</h4>
								</div>
								<div class="latest-text2 hvr-sweep-to-top">
									<h4>-10%</h4>
								</div>
							</div>
						</div>
						<div class="col-md-4 latest-grid">
							<div class="latest-top">
								<img  src="{{asset('/')}}front-end/images/l6.jpg" class="img-responsive"  alt="">
								<div class="latest-text">
									<h4>Cameras</h4>
								</div>
								<div class="latest-text2 hvr-sweep-to-top">
									<h4>-30%</h4>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<div class="new-arrivals-w3agile">
					<div class="container">
						<h3 class="tittle1">Best Sellers</h3>
						
                        <div class="arrivals-grids">

							  @php $i=0;
                            @endphp
							@foreach($newproducts as $newproduct)
							 @if($i<12 && $i >7)
						<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="{{route('product-details',['id'=>$newproduct->id,'name'=>$newproduct->product_name])}}" class="new-gri">
												<div class="grid-img">
													<img  src="{{asset($newproduct->product_image)}}" class="img-responsive" alt="">
												</div>
												 <div class="grid-img">
													<img  src="{{asset($newproduct->product_image)}}" class="img-responsive"  alt="">
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
									{{$newproduct->product_name}}</a></h6>
										<span class="size">{{$newproduct->product_size}}</span>
										<p ><em class="item_price">{{$newproduct->product_price}}</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							@endif
							@php $i++; @endphp
							@endforeach
							<br>
							<div class="clearfix"></div>
					</div>
				</div>
			<!--new-arrivals-->
		</div>
		<!--content-->



@endsection