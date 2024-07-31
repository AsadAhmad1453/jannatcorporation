@extends('website.layouts.app')
@section('content')
 <!-- Breadcrumb -->
 <section class="breadcrumb-outer text-center">
	<div class="container">
		<div class="breadcrumb-content">
			<h2 class="white">Cars </h2>
			<nav aria-label="breadcrumb">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Cars</li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="overlay"></div>
</section>
<!-- BreadCrumb Ends -->

<!-- Destinations -->
<section class="cars-destinations">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12">
				
				<div class="trend-box">
					<div class="row mix tour">
						@foreach ($cars as $car)
						<div class="col-md-6 col-sm-6 col-xs-12 mar-bottom-30">
							<div class="trend-item">
								<div class="trend-image" style="height:300px">
									<img src="{{asset($car->images[0]->image_path)}}" alt="image">
									<div class="trend-price">
										<p class="price">{{$car->company->name}} </p>
									</div>
								</div>
								<div class="trend-content">
									<p><i class="flaticon-location-pin"></i> {{$car->location}}</p>
									<h4><a href="{{route('car-detail',$car->id)}}">{{$car->title}}</a></h4>
									<div class="para-content">
									   <span class="mar-right-20"><a href="#" class="tag"><i class="fa fa-tachometer-alt mar-right-5"></i> {{$car->transmission}}</a></span>
									   <span class="mar-right-20"><a href="#"><i class="fa fa-eye-dropper mar-right-5"></i> {{$car->registration_year}}</a></span>
									   <span><a href="#"><i class="fa fa-meteor"></i> {{$car->model}}</a></span>  
									</div>
								</div>
							</div>
						</div>
						@endforeach
						
						
					</div>
				</div>  
			</div>    

			<div id="sidebar" class="col-md-4 col-sm-12">
				<aside class="detail-sidebar sidebar-wrapper">
					<div class="sidebar-item">
						<form class="filter-box">
							<h3 class="white">Find The Places</h3>
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group">
										<label class="white">Your Destination</label>
										<div class="input-box">
											<i class="flaticon-placeholder"></i>
											<select class="niceSelect">
												<option value="1">Where are you going?</option>
												<option value="2">Argentina</option>
												<option value="3">Belgium</option>
												<option value="4">Canada</option>
												<option value="5">Denmark</option>
											</select>
										</div>                            
									</div>
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label class="white">Check In</label>
										<div class="input-box">
											<i class="flaticon-calendar"></i>
											<input id="date-range0" type="text" placeholder="yyyy-mm-dd">
										</div>                            
									</div>
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label class="white">Check Out</label>
										<div class="input-box">
											<i class="flaticon-calendar"></i>
											<input id="date-range1" type="text" placeholder="yyyy-mm-dd">
										</div>                            
									</div>
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label class="white">Adult</label>
										<div class="input-box">
											<i class="flaticon-add-user"></i>
											<select class="niceSelect">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>                             
									</div>
								</div>

								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="form-group">
										<label class="white">Children</label>
										<div class="input-box">
											<i class="flaticon-add-user"></i>
											<select class="niceSelect">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>                             
									</div>
								</div>
								<div class="col-xs-12">
									<div class="form-group mar-top-15">
										<a href="#" class="biz-btn">Search</a>                         
									</div>
								</div>
							</div>
						</form>
					</div>

					<div class="sidebar-item">
						<h3>Price Range($)</h3>
						<div class="range-slider">
							<div data-min="0" data-max="2000" data-unit="$" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
								<span class="min-value">0 $</span> 
								<span class="max-value">2000 $</span>
								<div class="ui-slider-range ui-widget-header ui-corner-all full" style="left: 0%; width: 100%;"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>

					<div class="sidebar-item">
						<div class="detail-title">
							<h3>Connection</h3>
						</div>
						<div class="sidebar-content">
							<div class="pretty p-default p-thick p-pulse">
								<input type="checkbox" />
								<div class="state">
									<label>Offers without connection (13)</label>
								</div>
							</div>
							<div class="pretty p-default p-thick p-pulse">
								<input type="checkbox" checked />
								<div class="state">
									<label>Offers with connection (88)</label>
								</div>
							</div>
						</div>
					</div>
					<div class="sidebar-item">
						<h3>Categories</h3>
						<div class="pretty p-default p-thick p-pulse">
							<input type="checkbox" />
							<div class="state">
								<label>SEA TOURS (785)</label>
							</div>
						</div>
						<div class="pretty p-default p-thick p-pulse">
							<input type="checkbox" checked />
							<div class="state">
								<label>ROMANTIC TOURS (125)</label>
							</div>
						</div>
						<div class="pretty p-default p-thick p-pulse">
							<input type="checkbox" />
							<div class="state">
								<label>FOOD TOURS (85)</label>
							</div>
						</div>
						<div class="pretty p-default p-thick p-pulse">
							<input type="checkbox" />
							<div class="state">
								<label>HONEYMOON TOURS (70)</label>
							</div>
						</div>
						<div class="pretty p-default p-thick p-pulse">
							<input type="checkbox" />
							<div class="state">
								<label>MOUNTAIN TOURS (159)</label>
							</div>
						</div>
					</div>
					<div class="sidebar-item">
						<h3>Car Type</h3>
						<div class="pretty p-default p-thick p-pulse">
							<input type="checkbox" />
							<div class="state">
								<label>Business<span class="number">749</span></label>
							</div>
						</div>
						<div class="pretty p-default p-thick p-pulse">
							<input type="checkbox" checked />
							<div class="state">
								<label>First Class<span class="number">630</span></label>
							</div>
						</div>
						<div class="pretty p-default p-thick p-pulse">
							<input type="checkbox" />
							<div class="state">
								<label>Economy<span class="number">58</span></label>
							</div>
						</div>
						<div class="pretty p-default p-thick p-pulse">
							<input type="checkbox" />
							<div class="state">
								<label>Premium Economy<span class="number">29</span></label>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</div>
</section>
<!-- Destination Ends -->

@endsection