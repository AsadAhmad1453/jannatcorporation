@extends('website.layouts.app')
@section('css')
<style>
	.contact-btn{
		margin-top: 5px;
		text-decoration: none;
		background-color: #EF2853;
		color: white;
		padding-left: 20px;
		padding-right: 20px;
		padding-top: 10px;
		padding-bottom:10px;
		border-radius: 10px;
	}
	.contact-btn:hover{
		cursor: pointer;
		color: white;
	}
	
</style>
@endsection
@section('content')
<!-- Breadcrumb -->
<section class="breadcrumb-outer text-center">
	<div class="container">
		<div class="breadcrumb-content">
			<h2 class="white">Car Detail</h2>
			<nav aria-label="breadcrumb">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Car Detail</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="overlay"></div>
</section>
<!-- BreadCrumb Ends -->

<!-- Destination Starts -->
<section class="car-detail">
	<div class="container">

		<div class="row">       
			<div id="content" class="col-md-8">
				<div class="destination-content">
					<h2 class="mar-bottom-5"><a href="car-detail.html">{{$car->title}}</a></h2>
					<h3>{{$car->location}}</h3>
					
				</div>  
				<div class="single-slider mar-bottom-30">
					<div class="slider-1 slider-store" style="background-color: white;">
						@foreach ($car->images as $image )
							<div class="detail-slider-item" >
								<img src="{{asset($image->image_path)}}" alt="image" width="400px" height="500px">
							</div>
						@endforeach
					</div>
					<div class="slider-1 slider-thumbs"  style="background-color: white;">
						@foreach ($car->images as $image )
							<div class="detail-slider-item">
								<img src="{{asset($image->image_path)}}" alt="image">
							</div>
						@endforeach
					</div>
				</div>     
				<div class="description detail-box">
					<div class="detail-title">
						<h3>Description</h3>
					</div>
					<div class="description-content">
						<p>{!!$car->description!!}</p>
						<div class="para-content pad-bottom-15">
							<span class="mar-right-20"><a href="#" class="tag"><i class="fa fa-tachometer-alt mar-right-5"></i>{{$car->transmission}}</a></span>
						   <span class="mar-right-20"><a href="#" class="tag"><i class="fa fa-ruler mar-right-5"></i>{{$car->model}} </a></span>
						   <span class="mar-right-20"><a href="#"><i class="fa fa-user mar-right-5"></i> {{$car->seats}} seats</a></span>
						</div>
						<ul class="list row">
							<li class="col-md-4 col-sm-6 col-xs-12">
								<div class="bold mar-bottom-10"><img width="20" height="20" src="https://img.icons8.com/fluency/48/car--v1.png" alt="car--v1"/>
 									Make</div>
								<span>{{$car->company->name}}</span>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12">
								<div class="bold mar-bottom-10"><img width="20" height="20" src="https://img.icons8.com/nolan/64/engine.png" alt="engine"/>
									Engine </div>
								<span>{{$car->engine}}</span>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12">
								<div class="bold mar-bottom-10"><img width="20" height="20" src="https://img.icons8.com/stickers/100/weight.png" alt="weight"/>
									Weight</div>
								<span>{{$car->weight}}</span>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12">
								<div class="bold mar-bottom-10"><img width="20" height="20" src="https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/64/external-steering-car-service-icongeek26-linear-colour-icongeek26.png" alt="external-steering-car-service-icongeek26-linear-colour-icongeek26"/>
									Steering</div>
								<span>{{$car->steering}}</span>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12">
								<div class="bold mar-bottom-10"><img width="20" height="20" src="https://img.icons8.com/nolan/64/color-dropper.png" alt="color-dropper"/> Color</div>
								<span>{{$car->color}}</span>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12">
								<div class="bold mar-bottom-10"><img width="20" height="20" src="https://img.icons8.com/external-flat-icons-maxicons/85/external-calender-insurance-flat-flat-icons-maxicons.png" alt="external-calender-insurance-flat-flat-icons-maxicons"/> Model</div>
								<span>{{$car->model}}</span>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12">
								<div class="bold mar-bottom-10"><img width="20" height="20" src="https://img.icons8.com/color/48/gas-station.png" alt="gas-station"/> Fuel</div>
								<span>{{$car->fuel}}</span>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12">
								<div class="bold mar-bottom-10"><img width="20" height="20" src="https://img.icons8.com/color/48/2-c.png" alt="2-c"/> Chasis no</div>
								<span>{{$car->chasis_no}}</span>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12">
								<div class="bold mar-bottom-10"><img width="20" height="20" src="https://img.icons8.com/emoji/48/notebook-emoji.png" alt="notebook-emoji"/> Registration Year</div>
								<span>{{$car->registration_year}}</span>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12">
								<div class="bold mar-bottom-10"><img width="20" height="20" src="https://img.icons8.com/external-icongeek26-linear-colour-icongeek26/64/external-car-door-car-parts-and-service-icongeek26-linear-colour-icongeek26.png" alt="external-car-door-car-parts-and-service-icongeek26-linear-colour-icongeek26"/> Doors</div>
								<span>{{$car->doors}}</span>
							</li>
							<li class="col-md-4 col-sm-6 col-xs-12">
								<div class="bold mar-bottom-10"><img width="20" height="20" src="https://img.icons8.com/color/48/qr-code--v1.png" alt="qr-code--v1"/> Model Code</div>
								<span>{{$car->model_code}}</span>
							</li>
						</ul>
						
					</div>
				</div>
				
			</div>

			<div id="sidebar" class="col-md-4">
				<aside class="detail-sidebar sidebar-wrapper">

					<div class="sidebar-item">
						<div class="detail-title">
							<h3>Popular Cars Rent</h3>
						</div>
						<div class="sidebar-content about-slider">
							@foreach ($sameCars as $sameCar)
							<div class="sidebar-package">
								<div class="sidebar-package-image" >
									<img src="{{asset($sameCar->images[0]->image_path)}}" alt="Images" height="300px">
								</div>
								<div class="destination-content mar-top-20">
									<div class="destination-title">
										<h4><a href="{{route('car-detail',$sameCar->id)}}">{{$sameCar->title}}</a></h4>
									</div>
									<p class="package-days">{{$sameCar->transmission}} | {{$car->registration_year}} | {{$car->engine}}</p>
									<p class="price-ft mar-0 bold">{{$sameCar->company->name}}</span></p>
								</div>
							</div>
							@endforeach
							
							
						</div>
					</div>

					<div class="sidebar-item sidebar-helpline">
						<div class="sidebar-helpline-content">
							<h3>Any Questions?</h3>
							<p>Contact on the following numbers or email us we will get back to you Shortly </p>
							<p><i class="fa fa-phone-alt"></i>{{$setting['contact_us_phone_number']??''}}</p>
							<p><i class="fa fa-envelope-open"></i>{{$setting['contact_us_email']??''}}</p>
							<a href="{{route('contactus-page',$car->id)}}" class="contact-btn">Contact for this car</a>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</div>
</section>
<!-- Destination Ends -->
@endsection