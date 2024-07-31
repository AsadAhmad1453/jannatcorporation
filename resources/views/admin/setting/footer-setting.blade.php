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
										<h4 class="card-title">Footer </h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Contact Heading</label>
													<input type="text" id="first-name-column" value="{{$footerContent['footer_contact_heading'] ?? ''}}" class="form-control " placeholder="Enter your contact heading " name="footer_contact_heading" />
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label for="first-name-column">Contact Description</label>
													<textarea type="text" id="first-name-column"  class="form-control content-inputs" placeholder="Enter your description" name="footer_contact_description" >{{$footerContent['footer_contact_description'] ?? ''}}</textarea>
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
										<h4 class="card-title">Social Icons</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Facebook</label>
													<input type="text" id="first-name-column" value="{{$footerContent['footer_facebook'] ?? ''}}" class="form-control " placeholder="Enter your facebook url" name="footer_facebook" />
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Twitter</label>
													<input type="text" id="first-name-column" value="{{$footerContent['footer_twitter'] ?? ''}}" class="form-control " placeholder="Enter your facebook url" name="footer_twitter" />
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Instagram</label>
													<input type="text" id="first-name-column" value="{{$footerContent['footer_instagram'] ?? ''}}" class="form-control " placeholder="Enter your facebook url" name="footer_instagram" />
												</div>
											</div>
											<div class="col-md-6 col-12">
												<div class="form-group">
													<label for="first-name-column">Linkedin</label>
													<input type="text" id="first-name-column" value="{{$footerContent['footer_linkedin'] ?? ''}}" class="form-control " placeholder="Enter your facebook url" name="footer_linkedin" />
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
