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
										<h4 class="card-title">Slide 1 </h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label for="first-name-column">Slide Image</label>
													<input type="file" name="slider_one_image" data-max-file-size="2M" data-allowed-file-extensions="png jpg jpeg" class="form-control @error('icon_image') is-invalid @enderror file-input" data-default-file="{{ asset($homepageContent['slider_one_image'] ?? '')}}">
													
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Banner headline</label>
													<input type="text" id="first-name-column" value="{{$homepageContent['slider_one_line'] ?? ''}}" class="form-control " placeholder="Enter your text" name="slider_one_line" />
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Banner Subline</label>
													<input type="text" id="first-name-column" value="{{$homepageContent['slider_one_subline'] ?? ''}}" class="form-control " placeholder="Enter your text" name="slider_one_subline" />
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Button text</label>
													<input type="text" id="first-name-column" value="{{$homepageContent['slider_one_button'] ?? ''}}" class="form-control " placeholder="Enter your text" name="slider_one_button" />
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">		
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Slide 2 </h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label for="first-name-column">Slide Image</label>
													<input type="file" name="slider_two_image" data-max-file-size="2M" data-allowed-file-extensions="png jpg jpeg" class="form-control @error('icon_image') is-invalid @enderror file-input" data-default-file="{{ asset($homepageContent['slider_two_image'] ?? '')}}">
													
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Banner headline</label>
													<input type="text" id="first-name-column" value="{{$homepageContent['slider_two_line'] ?? ''}}" class="form-control " placeholder="Enter your text" name="slider_two_line" />
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Banner Subline</label>
													<input type="text" id="first-name-column" value="{{$homepageContent['slider_two_subline'] ?? ''}}" class="form-control " placeholder="Enter your text" name="slider_two_subline" />
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Button text</label>
													<input type="text" id="first-name-column" value="{{$homepageContent['slider_two_button'] ?? ''}}" class="form-control " placeholder="Enter your text" name="slider_two_button" />
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">		
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Slide 3 </h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label for="first-name-column">Slide Image</label>
													<input type="file" name="slider_three_image" data-max-file-size="2M" data-allowed-file-extensions="png jpg jpeg" class="form-control @error('icon_image') is-invalid @enderror file-input" data-default-file="{{ asset($homepageContent['slider_three_image'] ?? '')}}">
													
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Banner headline</label>
													<input type="text" id="first-name-column" value="{{$homepageContent['slider_three_line'] ?? ''}}" class="form-control " placeholder="Enter your text" name="slider_three_line" />
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Banner Subline</label>
													<input type="text" id="first-name-column" value="{{$homepageContent['slider_three_subline'] ?? ''}}" class="form-control " placeholder="Enter your text" name="slider_three_subline" />
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Button text</label>
													<input type="text" id="first-name-column" value="{{$homepageContent['slider_three_button'] ?? ''}}" class="form-control " placeholder="Enter your text" name="slider_three_button" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">		
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Featured Cars</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label for="first-name-column">Subtitle</label>
													<textarea type="text" id="first-name-column" value="" class="form-control content-inputs" placeholder="Enter your text" name="featured_cars_subtitle" >{{$homepageContent['featured_cars_subtitle'] ?? ''}}</textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">		
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Advertisement Section</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<div class="form-group">
													<label for="first-name-column">Background Image</label>
													<input type="file" name="advertisement_background" data-max-file-size="2M" data-allowed-file-extensions="png jpg jpeg" class="form-control @error('icon_image') is-invalid @enderror file-input" data-default-file="{{ asset($homepageContent['advertisement_background'] ?? '')}}">
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Title</label>
													<input type="text" id="first-name-column" value="{{$homepageContent['advertisement_title'] ?? ''}}" class="form-control " placeholder="Enter your text" name="advertisement_title" />
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Subtitle</label>
													<input type="text" id="first-name-column" value="{{$homepageContent['advertisement_subtitle'] ?? ''}}" class="form-control " placeholder="Enter your text" name="advertisement_subtitle" />
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Button text</label>
													<input type="text" id="first-name-column" value="{{$homepageContent['advertisement_button'] ?? ''}}" class="form-control " placeholder="Enter your text" name="advertisement_button" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">		
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Recent Cars</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Subtitle</label>
													<input type="text" id="first-name-column" value="{{$homepageContent['recent_cars_subtitle'] ?? ''}}" class="form-control " placeholder="Enter your text" name="recent_cars_subtitle" />
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
