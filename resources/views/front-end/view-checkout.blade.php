@extends('front-end.master')
@section('body')

	<div class="banner1">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>Add To Cart</span></h3>
			</div>
		</div>
		<br>
        <hr/>
        <h3 class="text-center text-success">You have to login to complete your valuable order.If you are not registered.Then Register first.</h3>
        <br>
        <br>
				<div class="content">
					<div class="single-w13">
						<div class="container">
							<div class="row">
								<div class="col-md-5 well">
								<h3>Register If you ae not register before!</h3>
								<br/>
					{{Form::open(['route'=>'customer-sign-up','method'=>'post'])}}
								<div class="key">
								<i class="fa fa-user" aria-hidden="true"></i>
								<input  type="text" value="" name="first_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" required="" placeholder="First Name">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-user" aria-hidden="true"></i>
								<input  type="text" value="" name="last_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}" required="" placeholder="Last Name">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="text" value="" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="" placeholder="Email" id="email">
								<span class="text-success" id="res"></span>
								<div class="clearfix"></div>
								
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" value="" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" required="" placeholder="password">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<input  type="text" value="" name="phone_number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}" required="" placeholder="Phone">
								<div class="clearfix"></div>
							</div>
								<div class="key">
								<i class="fa fa-home" aria-hidden="true"></i>
								<input  type="text" value="" name="address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="" placeholder="Address">
								<div class="clearfix"></div>
							</div>
								<div class="form-group">
									
									<input type="submit" name="register" class="form-control btn  btn-info" value="Register" id="regbtn">
								</div>
								{{Form::close()}}

								</div>
								<div class="col-md-2 ">

								<h5 style="font-size:20% "> OR s</h5>
							</div>

								<div class="col-md-5 well">
								<h3>Already Registered.Then Log in</h3>
								<br>
								<h4 class="text-center text-danger">{{Session::get('message')}}</h4>
								<br/>
								{{Form::open(['route'=>'customer-login','method'=>'post'])}}
							
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="text" value="" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="" placeholder="Email">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" value="" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" required="" placeholder="password">
								<div class="clearfix"></div>
							</div>
							
									<input type="submit" name="register" class=" form-control btn  btn-success" value="Log-In">
								</div>
								{{Form::close()}}
								</div>
								</div>
								</div>
								</div>
							</div>
<script type="text/javascript">
				var email = document.getElementById('email');
				email.onblur = function()
			{
				var email = document.getElementById('email').value;
			    var xmlHttp = new XMLHttpRequest();
                var serverpage='http://localhost:8076/newshop/public/ajax-email-check+email';
                xmlHttp.open('GET',serverpage);
                xmlHttp.onreadystatechange = function()
 {
  if(xmlHttp.readystate == 4 && xmlHttp.status == 200)
  {
  	document.getElementById('res').innerHTML = xmlHttp.responseText;
  	if(xmlHttp.responseText == 'Already Exsits')
  	{
  		document.getElementById('regbtn').disabled = true;

  	}
  	else
  	{
  		document.getElementById('regbtn').disabled = false;
  	}
  }
  xmlHttp.send(null);

}
							}
							</script>


							@endsection