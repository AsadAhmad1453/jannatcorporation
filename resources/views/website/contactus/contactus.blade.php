@extends('website.layouts.app')
@section('css')
<style>
	.error{
		color: red;
	}
</style>
@endsection
@section('content')
  <!-- Breadcrumb -->
  <section class="breadcrumb-outer text-center">
	<div class="container">
		<div class="breadcrumb-content">
			<h2 class="white">Send a Message</h2>
			<nav aria-label="breadcrumb">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Send us Message</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="overlay"></div>
</section>
<!-- BreadCrumb Ends -->

<!-- contact starts -->
<section class="contact-main">
	<div class="container">
		<div class="contact-info mar-bottom-30">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="info-item">
						<div class="info-icon">
							<i class="fa fa-map-marker-alt"></i>
						</div>
						<div class="info-content">
							<p>{{$setting['contact_us_location']??''}}</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="info-item">
						<div class="info-icon">
							<i class="fa fa-phone"></i>
						</div>
						<div class="info-content">
							<p>{{$setting['contact_us_phone_number']??''}}</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="info-item">
						<div class="info-icon">
							<i class="fa fa-envelope"></i>
						</div>
						<div class="info-content">
							<p>{{$setting['contact_us_email']??''}}</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="contact-map">
			<div class="row">
				<div class="col-md-6">
					<div id="map" style="height: 535px; width: 100%;"></div>
				</div>
				<div class="col-md-6">
					<div id="contact-form1" class="contact-form">
						<h3>Keep in Touch</h3>
						<div id="contactform-error-msg"></div>
						<form method="POST" action="{{route('send-message')}}" name="contactform" id="contactform">
							@csrf
							<input type="hidden" name="car_id" class="form-control" id="fname" value="{{$car->id}}" hidden>
							<div class="form-group">
								<input type="text" name="first_name" class="form-control" id="fname" placeholder="First Name" required>
							</div>
							<div class="form-group">
								<input type="text" name="last_name" class="form-control" id="lname" placeholder="Last Name" required>
							</div>
							<div class="form-group">
								<input type="email" name="email"  class="form-control" id="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="text" name="phone" class="form-control" id="phnumber" placeholder="Phone" >
							</div>
							<div class="textarea">
								<textarea name="comments" placeholder="Enter a message" required></textarea>
							</div>
							<div class="comment-btn text-right mar-top-15">
								<button type="submit" class="biz-btn" >Send Message</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact Ends -->

@endsection