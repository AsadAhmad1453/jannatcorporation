@extends('admin.layouts.app')
@section('css')
<style>
	.ck-editor__editable {
        min-height: 300px;
    }
	.cancel-btn{
		text-decoration: none;
		font-size: 25px;
		color: red
	}
	.cancel-btn:hover{
		color: rgb(158, 0, 0);
	}
</style>
@endsection
@section('content')
<div class="app-content content ">
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<div class="content-wrapper container-xxl p-0">
		<div class="content-header row">
			<div class="content-header-left col-md-9 col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h2 class="content-header-title float-left mb-0">Upload Car</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body">
			<section id="multiple-column-form">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Enter Car Details</h4>
							</div>
							<div class="card-body">
								<form class="form" method="POST" action="{{Route('admin.store.car')}}" enctype="multipart/form-data">
								 @csrf
									<div class="row">
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="first-name-column">Title</label>
												<input type="text" id="first-name-column" class="form-control @error('title') has-danger @enderror" placeholder="Title" name="title" value="{{old('title')}}"/>
												@error('title')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="first-name-column">Make</label>
												<select class="form-control select2 @error('make') has-danger @enderror" id="company_id" name="company_id">
													@foreach ($companies as $company )
													<option value="{{$company->id}}"  {{ old('company_id') == $company->id ? 'selected' : '' }}>{{$company->name}}</option>
													@endforeach
												</select>
												@error('company_id')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="first-name-column">Transmission</label>
												<select class="form-control select2 @error('transmission') has-danger @enderror" id="transmission" name="transmission">
													<option value="manual"  {{ old('transmission') == '0' ? 'selected' : '' }} selected>Manual</option>
													<option value="automatic"  {{ old('transmission') == '1' ? 'selected' : '' }}>Automatic</option>
												</select>
												@error('transmission')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="city-column">Model</label>
												<input type="text" id="city-column" class="form-control @error('model') has-danger @enderror" placeholder="Model" name="model" />
												@error('model')
													<span class="text-danger" role="alert">
														<strong>{{$message}}</strong>
													</span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="country-floating">Engine cc</label>
												<input type="text" id="country-floating" class="form-control @error('engine') has-danger @enderror" name="engine" placeholder="Engine cc" />
												@error('engine')
													<span class="text-danger" role="alert">
														<strong>{{$message}}</strong>
													</span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="company-column">Fuel</label>
												<input type="text" id="company-column" class="form-control @error('fuel') has-danger @enderror" name="fuel" placeholder="petrol/diesel" />
												@error('fuel')
													<span class="text-danger" role="alert">
														<strong>{{$message}}</strong>
													</span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="company-column">Chasis no</label>
												<input type="text" id="company-column" class="form-control @error('chasis_no') has-danger @enderror" name="chasis_no" placeholder="XXXXXX" />
												@error('chasis_no')
													<span class="text-danger" role="alert">
														<strong>{{$message}}</strong>
													</span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="company-column">Registration year</label>
												<input type="text" id="company-column" class="form-control @error('registration_year') has-danger @enderror" name="registration_year" placeholder="2001,2010,2015" />
												@error('registration_year')
													<span class="text-danger" role="alert">
														<strong>{{$message}}</strong>
													</span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="company-column">Doors</label>
												<input type="text" id="company-column" class="form-control @error('doors') has-danger @enderror" name="doors" placeholder="1,2,3" />
												@error('doors')
													<span class="text-danger" role="alert">
														<strong>{{$message}}</strong>
													</span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="company-column">Model Code</label>
												<input type="text" id="company-column" class="form-control @error('model_code') has-danger @enderror" name="model_code" placeholder="XXXXXX" />
												@error('model_code')
													<span class="text-danger" role="alert">
														<strong>{{$message}}</strong>
													</span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="company-column">Gross Weight</label>
												<input type="text" id="company-column" class="form-control @error('weight') has-danger @enderror" name="weight" placeholder="XXXXXX" />
												@error('weight')
													<span class="text-danger" role="alert">
														<strong>{{$message}}</strong>
													</span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="company-column">Seats</label>
												<input type="text" id="company-column" class="form-control @error('seats') has-danger @enderror" name="seats" placeholder="XXXXXX" />
												@error('seats')
													<span class="text-danger" role="alert">
														<strong>{{$message}}</strong>
													</span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="company-column">Steering</label>
												<input type="text" id="company-column" class="form-control @error('steering') has-danger @enderror" name="steering" placeholder="manual/power" />
												@error('steering')
													<span class="text-danger" role="alert">
														<strong>{{$message}}</strong>
													</span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="company-column">Location</label>
												<input type="text" id="company-column" class="form-control @error('location') has-danger @enderror" name="location" placeholder="location" />
												@error('location')
													<span class="text-danger" role="alert">
														<strong>{{$message}}</strong>
													</span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="company-column">Color</label>
												<input type="text" id="company-column" class="form-control @error('color') has-danger @enderror" name="color" placeholder="red,black,white" />
												@error('color')
													<span class="text-danger" role="alert">
														<strong>{{$message}}</strong>
													</span>
                                                @enderror
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<label for="company-column">Description</label>
												<textarea class="form-control @error('description') is-invlid @enderror" id="content" placeholder="Enter the Description" name="description" >{{old('description')}}</textarea>												
												@error('description')
													<span class="text-danger" role="alert">
														<strong>{{$message}}</strong>
													</span>
                                                @enderror
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="form-group">
												<label for="first-name-column">Featured</label>
												<select class="form-control select2 @error('featured') has-danger @enderror" id="featured" name="featured">			
													<option value="0" selected>No</option>
													<option value="1" >Yes</option>
												</select>
												@error('featured')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                                @enderror
											</div>
										
									</div>
									<div class="row car-images">
										<div class="col-12">
										<button class="btn btn-primary" id="add-image"><i class="fa fa-plus" aria-hidden="true"></i>Add image</button>
										</div>
										<div class="col-md-6 col-12 mt-2">
											<div class="form-group">
												<label for="first-name-column"> Thumbnail image</label>
												<input type="file" name="car_images[]" data-max-file-size="2M" data-allowed-file-extensions="png jpg jpeg" class="form-control @error('image') is-invalid @enderror file-input" >												
											</div>
										</div>
										<div class="col-md-6 col-12 mt-2">
											<div class="form-group">
												<label for="first-name-column"> Car Image 2</label>
												<input type="file" name="car_images[]" data-max-file-size="2M" data-allowed-file-extensions="png jpg jpeg" class="form-control @error('image') is-invalid @enderror file-input" >												
												
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<button type="submit" class="submit-btn btn btn-primary mr-1">Submit</button>
											<button type="reset" class="btn btn-outline-secondary">Reset</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Basic Floating Label Form section end -->
		</div>
	</div>
</div>
@endsection
@section('js')
<script>
	var counter = 2;
	$('#add-image').on('click',function(e){
		e.preventDefault();
		counter++;
		var card = `<div class="col-md-6 col-12 mt-2">
											<div class="form-group">
												<a href="" id="cancel-image" class="cancel-btn float-right"><i class="fa fa-close" aria-hidden="true"></i> </a>
												<label for="first-name-column"> Car Image ${counter}</label>
												<input type="file" name="car_images[]" data-max-file-size="2M" data-allowed-file-extensions="png jpg jpeg" class="form-control @error('image') is-invalid @enderror file-input" >												@error('title')
                                                <span class="text-danger" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                                @enderror
											</div>
										</div>`
		
		$('.car-images').append(card);
		$('.file-input').dropify();
	});
	$(document).ready(function(){
		ClassicEditor.create(document.querySelector('#content'), {
    })
    .catch(error => {
        console.error(error);
    });
		$('.car-images').on('click','.cancel-btn',function(e){
		e.preventDefault();
		$(this).closest('.col-md-6').remove();
		counter--;
		});

		$('.submit-btn').on('click',function(){
			ClassicEditor.instances['content'].updateElement();
			return true;
		})

	});
	
</script>
@endsection