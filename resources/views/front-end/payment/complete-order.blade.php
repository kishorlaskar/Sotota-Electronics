@extends('front-end.master')
@section('title')
Complete Order
@endsection

@section('body')
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4" >
					<div class="ban-top" style="text-align: center;">
								<img src="{{asset('/')}}front-end/images/thanks.jpg" class="img-responsive" alt="" height="100" width="100" />
								<!-- <div class="ban-text">
									<h4></h4>
								</div> -->
								<!-- <div class="ban-text2 hvr-sweep-to-top">
									<h4>20% <span>Off/-</span></h4>
								</div> -->
							</div>

				</div>
				<div class="col-sm-4">
								<h1 style="text-align: center; color: orange; padding-top: 250px;"> For Your Order</h1>
							</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-default"><!--login form-->
						<h2 style="font-family: cursive; text-align: center;">Your Order is recived</h2>
						<br>
						<span style="font-family: sans-serif; color: red; text-align: center;"><p>we will contact with  you as soon as possible</p></span>
						
					</div><!--/login form-->
				</div>
				
				<div class="col-sm-6 ">
					<div class="panel panel-default">
					<!--sign up form-->
						<h2 style="text-align: center; color: black; font-family: cursive;">Happy Living </h2>
						<br>
						<span style="font-family: sans-serif; color: green; text-align: center;"><p>Keep Shopping wirh Sotota Electronics</p></span>
						
					
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection