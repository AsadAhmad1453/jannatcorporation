@extends('website.layouts.app')
@section('content')
  <!-- banner starts -->
  <section class="banner">
	<div class="slider">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="slide-inner">
					   <div class="slide-image" style="background-image:url({{asset($setting['slider_one_image']??'')}})"></div>
					   <div class="swiper-content">
							<h1>{{$setting['slider_one_line']??''}}</h1>
							<p class="mar-bottom-30">{{$setting['slider_one_subline']??''}}</p>
							<a href="" class="biz-btn">{{$setting['slider_one_button']??''}}</a>
						</div> 
						<div class="overlay"></div>
					</div> 
				</div>
				<div class="swiper-slide">
					<div class="slide-inner">
						<div class="slide-image" style="background-image:url({{asset($setting['slider_two_image']??'')}})"></div>
					   <div class="swiper-content">
							<h1>{{$setting['slider_two_line']??''}}</h1>
							<p class="mar-bottom-30">{{$setting['slider_two_line']??''}}</p>
							<a href="" class="biz-btn">{{$setting['slider_one_button']??''}}</a>
						</div> 
						<div class="overlay"></div>
					</div> 
				</div>
				<div class="swiper-slide">
					<div class="slide-inner">
					   <div class="slide-image" style="background-image:url({{asset($setting['slider_three_image']??'')}})"></div>
					   <div class="swiper-content">
							<h1></h1>
							<p class="mar-bottom-30">{{$setting['slider_three_line']??''}}</p>
							<a href="" class="biz-btn">{{$setting['slider_one_button']??''}}</a>
						</div> 
						<div class="overlay"></div>
					</div> 
				</div>
			</div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		
	</div>
</section>
<!-- banner ends -->

<!-- form starts -->
<section class="banner-form">
	<div class="container">
		<div class="form-content">
			<div class="tab-content">
				<div id="hotel" class="tab-pane in active">
					<form id="searchForm" method="POST" action="{{route('advance-search')}}">
						@csrf
						<div class="row filter-box">
							<div class="col-md-3 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Make</label>
									<div class="input-box">
										<select class="niceSelect" name="company">
											@foreach ($companies as $company)
												<option value="{{$company->id}}">{{$company->name}}</option>
											@endforeach
										</select>
									</div>                            
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="form-group">
									<label>Name</label>
									<div class="input-box">
										<input  type="text" name="title" placeholder="car name">
									</div>                            
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="form-group">
									<label>Model</label>
									<div class="input-box">
										<input  type="text" name="model" placeholder="model">
									</div>                            
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="form-group">
									<label>Location</label>
									<div class="input-box">
										<input  type="text" name="location" placeholder="location">
									</div>                            
								</div>
							</div>
							<div class="col-md-3 col-sm-12 col-xs-12">
								<div class="form-group mar-top-30">
									<button type="submit" id="searchBtn" class="biz-btn"><i class="fa fa-search"></i> Find Now</button>                         
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- form ends -->


<!-- cars/cars Starts -->
@if($featuredCars->count()>0)
<section class="cars-trending bg-grey pad-bottom-50">
	<div class="container">
		<div class="section-title">
			<h2>Featured cars</h2>
			<p>{!!$setting['']??''!!}</p>
		</div>
		<div class="trend-box">
			<div class="row team-slider">
				@foreach ($featuredCars as $featuredCar)
				<div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30">
					<div class="trend-item">
						<div class="trend-image" style="height:300px">
							<img src="{{asset($featuredCar->images[0]->image_path)}}" alt="image">
							
							<div class="trend-price">
								<p class="price"><span>{{$featuredCar->company->name}} </span></p>
							</div>
						</div>
						<div class="trend-content">
							<p><i class="flaticon-location-pin"></i>{{$featuredCar->location}}</p>
							<h4><a href="{{route('car-detail',$featuredCar->id)}}">{{$featuredCar->title}}</a></h4>
							
							<div class="para-content">
								<span class="mar-right-10"><a href="#" class="tag"><i class="fa fa-door-closed mar-right-5"></i>{{$featuredCar->doors}}</a></span>
							   <span class="mar-right-10"><a href="#" class="tag"><i class="fa fa-user mar-right-5"></i>{{$featuredCar->transmission}}</a></span>
							   <span class="mar-right-10"><a href="#"><i class="fa fa-briefcase mar-right-5"></i>{{$featuredCar->registration_year}}</a></span>
							   <span><a href="#"><i class="fa fa-briefcase mar-right-5"></i>{{$featuredCar->model}}</a></span>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
				
			</div>
		</div>    
	</div>
</section>
@endif
<!-- cars/cars Ends -->

<!-- Call to action starts -->
<section class="call-to-action car-action" style=" background: linear-gradient(0deg, #01235085, #01235085), url({{asset($setting['advertisement_background']??'')}}); background-repeat:no-repeat; background-size:cover; background-position:center; background-attachment: fixed;">
	<div class="container">
		<div class="row display-flex">
			<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
				<div class="action-content text-center">
					<h3 class="white package-name">{{$setting['advertisement_title']??''}}</h3>
					<h2 class="white">{{$setting['advertisement_subtitle']??''}}</h2>
					<a href="#" class="biz-btn">{{$setting['advertisement_button']??''}}</a>
				</div>
			 </div>     
		</div>    
	</div>
</section>
<!-- call to action Ends -->

<!-- top deal starts -->
<section class="top-deals">
	<div class="container">
		<div class="section-title">
			<h2>Recent<span>Cars</span></h2>
			<p>{!!$setting['recent_cars_subtitle']??''!!}</p>
		</div>
		<div class="row top-deal-slider">
			@foreach ($recentCars as $recentCar)
			<div class="col-md-4 slider-item">
				<div class="slider-image" style="height:300px">
					<img src="{{asset($recentCar->images[0]->image_path)}}" alt="image">
				</div>
				<div class="slider-content">
					<h6 class="mar-0"><i class="fa fa-map-marker-alt"></i>{{$recentCar->location}}</h6>
					<h4>{{$recentCar->title}}</h4>
					<p>Engine: {{$recentCar->engine}} | Transmission: {{$recentCar->transmission}} <br> | Model: {{$recentCar->model}}</p>
					<a href="{{route('car-detail',$recentCar->id)}}">
						<div class="deal-price">
							<p class="price">See Detail</p>
						</div>
					</a>
				</div>
			</div>
			@endforeach
			
		
		</div>
	</div>
</section>
<!-- top deal ends -->

@endsection
@section('js')
<script>
	 $(document).ready(function() {
        $('#searchBtn').click(function() {
			alert('dsdsds');
            $('#searchForm').submit();
        });
    });
</script>
@endsection