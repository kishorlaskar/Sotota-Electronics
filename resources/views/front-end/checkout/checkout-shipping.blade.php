@extends('front-end.master')
@section('body')


				<div class="content">
					<div class="single-w13">
						<div class="container">
							<div class="row">
								<div class="col-md-12 well text-center text-success">
								<h3>Dear Mr.{{Session::get('customerName')}} , You have to give us shipping information to complete your valuable order.If your billing info and shipping info are same then just press save shipping info button.</h3>
							</div>
						</div>
								<br/>
								<div class="row"> 
									<div class="col-md-8 col-md-offset-3"> 
										<h3>Your Shipping Info goes here..</h3>
								<br/>
					{{Form::open(['route'=>'new-shipping','method'=>'post'])}}
								<div class="key">
								<i class="fa fa-user" aria-hidden="true"></i>
								<input  type="text" value="{{$customer->first_name.' '.$customer->last_name}}" name="full_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Full Name';}" required="" placeholder="Full Name">
								<div class="clearfix"></div>
							</div>
						
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="text" value="{{$customer->email}}" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="" placeholder="Email">
								<div class="clearfix"></div>
							</div>
							
							<div class="key">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<input  type="text" value="{{$customer->phone_number}}" name="phone_number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}" required="" placeholder="Phone">
								<div class="clearfix"></div>
							</div>
								<div class="key">
								<i class="fa fa-home" aria-hidden="true"></i>
								<input  type="text" value="{{$customer->address}}" name="address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="" placeholder="Address">
								<div class="clearfix"></div>
							</div>
								<div class="form-group">
									
									<input type="submit" name="btn" class="form-control btn  btn-info" value="Save Shipping Info">
								</div>
								{{Form::close()}}

								</div>
							

								
								</div>
								</div>
								</div>
								</div>
							</div>


							@endsection