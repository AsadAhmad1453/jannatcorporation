@extends('admin.layouts.app')

@section('content')
<div class="app-content content ">
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<div class="content-wrapper container-xxl p-0">
		<div class="content-body">
				<!-- Basic multiple Column Form section start -->
				<section id="multiple-column-form">
					<form class="form" method="POST" action="{{route('admin.store.setting')}}" enctype="multipart/form-data">
					@csrf
						<div class="row">		
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Contact Us</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Phone Number</label>
													<input type="text" id="first-name-column" value="{{$content['contact_us_phone_number'] ?? ''}}" class="form-control " placeholder="Enter your phone number" name="contact_us_phone_number" />
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Email</label>
													<input type="text" id="first-name-column" value="{{$content['contact_us_email'] ?? ''}}" class="form-control " placeholder="Enter your email" name="contact_us_email" />
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Location</label>
													<input type="text" id="first-name-column" value="{{$content['contact_us_location'] ?? ''}}" class="form-control " placeholder="Enter your email" name="contact_us_location" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-12">
								<button type="submit" class="btn btn-primary mr-1">Submit</button>
								<button type="reset" class="btn btn-outline-secondary">Reset</button>
							</div>
						</div>
					</form>
				</section>
				<!-- Basic Floating Label Form section end -->
		</div>
	</div>
</div>
@endsection
