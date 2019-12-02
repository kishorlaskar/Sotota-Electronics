@extends('front-end.master')
@section('body')

<div class="content">
					<div class="single-w13">
						<div class="container">
							<div class="row">
								<div class="col-md-12 well text-center text-success">
								<h3>Dear Mr.{{Session::get('customerName')}}, please choose any payment method.</h3>
							</div>
						</div>
								<br/>
								<div class="row"> 
									<div class="col-md-8 col-md-offset-2 well">
									{{Form::open(['route'=>'new-order','method'=>'post'])}}
										<table class="table table-bordered">
											<tr>
												<th>Cash On Delivery</th>
												<td> <input type="radio" name="payment_type" value="cash">Cash On Delivery</td>
											</tr>
											<tr>
												<th>Paypal</th>
												<td> <input type="radio" name="payment_type" value="paypal">Paypal</td>
											</tr>
											<tr>
												<th>Bkash</th>
												<td> <input type="radio" name="payment_type" value="bkash">Bkash</td>
											</tr>
											<tr>
												<th>DBBL</th>
												<td> <input type="radio" name="payment_type" value="dbbl">DBBL</td>

											</tr>
											<tr>
												<th>
													<td><input type="submit" value="Order" name="btn" class="btn btn-sm btn-success pull-right">
													</td>
												</th>
											</tr>
										</table>
								{{Form::close()}}
									</div>
								</div>
							</div>
						</div>
					</div>
										


@endsection