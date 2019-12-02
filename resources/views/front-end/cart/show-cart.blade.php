@extends('front-end.master')
@section('body')

	<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Add To Cart</span></h3>
			</div>
		</div>
				<div class="content">
					<div class="single-w13">
						<div class="container">
							<div class="row">
								<div class="col-md-11 col-md-offset-1">
									<br>
									<h3 class="text-center text-sucess">My Shopping Cart </h3>
									<hr/>
								
									<table class="table table-bordered">
										<tr class="bg-primary">
											<th>SL No</th>
											<th>Name</th>
											<th>Image</th>
											<th>Quantity</th>
											<!-- <th>Size</th> -->
											<th>Price Tk.</th>
											<th>Total Price Tk.</th>
											<th>Action</th>
										</tr>
										@php($i=1)
										@php($sum =0)
										@foreach($cartproducts as $cartproduct)
										<tr>
											<td>{{$i++}}</td>
											<td>{{$cartproduct->name}}</td>
											<td><img src="{{asset($cartproduct->options->image)}}" alt="" height="70" width="70"></td>
											<td>
	{{Form::open(['route'=>'update-cart','method'=>'post'])}}
	<input type="number" name="qty"   value="{{$cartproduct->qty }}" min="1" > 
	<input type="hidden" name="rowId" value="{{$cartproduct->rowId }}" min="1" >
    <input type="submit" name="btn" value="update">
	{{Form::close()}}
											</td>
											<!-- <td>{{$cartproduct->size}}</td> -->
											<td>{{$cartproduct->price}}</td>
											<td>{{$total = $cartproduct->price * $cartproduct->qty }}</td>
											<td>
												<a href="{{route('delete-cart',
												[
												'rowId'=>$cartproduct->rowId
												])}}" class="btn btn-danger btn-xs" title="Delete">
													
													<span class="glyphicon glyphicon-trash"></span>
												</a>
											</td>
											
										</tr>
										<?php $sum = $sum+$total; ?>
										@endforeach
									</table>
									<hr>
									<table class="table table-bordered">
										<tr class="bg-sucess">
											<th>Item Total (TK.)</th>
											<td>{{ $sum }}</td>

										</tr>
										<tr>
											<th>Vat Total (TK.)</th>
											<td>{{ $vat = 83.78999999999999 }}</td>
										</tr>
										<tr>
											<th>Grand Total (TK.)</th>
											<td>{{$orderTotal = $sum+$vat }}
								<?php
									Session::put
										('orderTotal',$orderTotal);
												?>
											</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="row">
								<div class="col-md-11 col-md-offset-1">
	@if(Session::get('customerId') && Session::get('shippingId'))
	<a href="{{route('checkout-payment')}}" class="btn btn-success  pull-right">Checkout</a>
	@elseif (Session::get('customerId'))
    <a href="{{route('checkout-shipping')}}" class="btn btn-success  pull-right">Checkout  </a>
    @else
       <a href="{{url('view-checkout')}}" class="btn btn-success  pull-right">Checkout</a>
   @endif

									<a href="#" class="btn btn-success ">Continue Shopping</a>
								</div>
							</div>
						</div>
					</div>
			<!-- <div class="cart-items">
				<div class="container">
					 <h2>My Shopping Bag (3)</h2>
						<script>$(document).ready(function(c) {
							$('.close1').on('click', function(c){
								$('.cart-header').fadeOut('slow', function(c){
									$('.cart-header').remove();
								});
								});	  
							});
					   </script>
					 <div class="cart-header">
						 <div class="close1"> </div>
						 <div class="cart-sec simpleCart_shelfItem">
								<div class="cart-item cyc">
									 <img src="images/p15.jpg" class="img-responsive" alt="">
								</div>
							   <div class="cart-item-info">
								<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
								<ul class="qty">
									<li><p>Min. order value:</p></li>
									<li><p>FREE delivery</p></li>
								</ul>
									 <div class="delivery">
									 <p>Service Charges : $10.00</p>
									 <span>Delivered in 1-1:30 hours</span>
									 <div class="clearfix"></div>
								</div>	
							   </div>
							   <div class="clearfix"></div>
													
						  </div>
					 </div>
					 <script>$(document).ready(function(c) {
							$('.close2').on('click', function(c){
									$('.cart-header2').fadeOut('slow', function(c){
								$('.cart-header2').remove();
							});
							});	  
							});
					 </script>
					<div class="cart-header2">
						 <div class="close2"> </div>
						  <div class="cart-sec simpleCart_shelfItem">
								<div class="cart-item cyc">
									 <img src="images/s1.jpg" class="img-responsive" alt="">
								</div>
							   <div class="cart-item-info">
								<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
								<ul class="qty">
									<li><p>Min. order value:</p></li>
									<li><p>FREE delivery</p></li>
								</ul>
									 <div class="delivery">
									 <p>Service Charges : $10.00</p>
									 <span>Delivered in 1-1:30 hours</span>
									 <div class="clearfix"></div>
								</div>	
							   </div>
							   <div class="clearfix"></div>
													
						  </div>
					  </div>
					  <script>$(document).ready(function(c) {
							$('.close3').on('click', function(c){
									$('.cart-header3').fadeOut('slow', function(c){
								$('.cart-header3').remove();
							});
							});	  
							});
					 </script>
					<div class="cart-header3">
						 <div class="close3"> </div>
							<div class="cart-sec simpleCart_shelfItem">
								<div class="cart-item cyc">
									 <img src="images/i7.jpg" class="img-responsive" alt="">
								</div>
							   <div class="cart-item-info">
								<h3><a href="#"> Lorem Ipsum is not simply </a><span>Pickup time:</span></h3>
								<ul class="qty">
									<li><p>Min. order value:</p></li>
									<li><p>FREE delivery</p></li>
								</ul>
									 <div class="delivery">
									 <p>Service Charges : $10.00</p>
									 <span>Delivered in 1-1:30 hours</span>
									 <div class="clearfix"></div>
								</div>	
							   </div>
							   <div class="clearfix"></div>
							</div>
					</div>		
				</div>
			</div>
	<!-- checkout -->	 -->
		</div>

@endsection