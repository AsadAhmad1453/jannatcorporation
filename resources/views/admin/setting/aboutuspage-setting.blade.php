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
										<h4 class="card-title">About Us</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Title</label>
													<input type="text" id="first-name-column" value="{{$content['about_us_title'] ?? ''}}" class="form-control " placeholder="Enter your title" name="about_us_title" />
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
										<h4 class="card-title">Card 1</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">heading 1 </label>
													<input type="text" id="first-name-column" value="{{$content['about_us_heading_one'] ?? ''}}" class="form-control " placeholder="Enter your heading" name="about_us_heading_one" />
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="first-name-column">Text</label>
													<textarea type="text" id="first-name-column"  class="form-control content-inputs" placeholder="Enter your text" name="about_us_text_one" >{{$content['about_us_text_one'] ?? ''}}</textarea>
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
										<h4 class="card-title">Card 2</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">heading 2 </label>
													<input type="text" id="first-name-column" value="{{$content['about_us_heading_two'] ?? ''}}" class="form-control " placeholder="Enter your heading" name="about_us_heading_two" />
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="first-name-column">Text</label>
													<textarea type="text" id="first-name-column"  class="form-control content-inputs" placeholder="Enter your text" name="about_us_text_two" >{{$content['about_us_text_two'] ?? ''}}</textarea>
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
										<h4 class="card-title">Section 2</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Subtitle</label>
													<input type="text" id="first-name-column" value="{{$content['about_us_subtitle'] ?? ''}}" class="form-control " placeholder="Enter your heading" name="about_us_subtitle" />
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Title</label>
													<input type="text" id="first-name-column" value="{{$content['about_us_section_title'] ?? ''}}" class="form-control " placeholder="Enter your heading" name="about_us_section_title" />
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="first-name-column">Text</label>
													<textarea type="text" id="first-name-column"  class="form-control content-inputs" placeholder="Enter your text" name="about_us_section_text" >{{$content['about_us_section_text'] ?? ''}}</textarea>
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<label for="first-name-column">Image 1</label>
													<input type="file" name="about_us_image_one" data-max-file-size="2M" data-allowed-file-extensions="png jpg jpeg" class="form-control @error('icon_image') is-invalid @enderror file-input" data-default-file="{{ asset($content['about_us_image_one'] ?? '')}}">
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<label for="first-name-column">Image 2</label>
													<input type="file" name="about_us_image_two" data-max-file-size="2M" data-allowed-file-extensions="png jpg jpeg" class="form-control @error('icon_image') is-invalid @enderror file-input" data-default-file="{{ asset($content['about_us_image_two'] ?? '')}}">
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
