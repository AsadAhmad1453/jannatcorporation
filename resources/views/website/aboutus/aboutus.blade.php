	@extends('website.layouts.app')
	@section('content')
	 <!-- Breadcrumb -->
	 <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2 class="white">About Us</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class="about-us">
        <div class="container">
            <div class="section-title">
                <h2>{{$setting['about_us_title']??''}}</h2>
            </div>
            <div class="about-desc">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-story">
                            <h3>{{$setting['about_us_heading_one']??''}}</h3>
                            <p class="mar-0">{!!$setting['about_us_text_one']??''!!}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-mission">
                            <h3>{{$setting['about_us_heading_two']??''}}</h3>
                            <p class="mar-0">{!!$setting['about_us_text_one']??''!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- why us about starts -->
    <section class="why-us pad-top-80 bg-grey">
        <div class="container">
            <div class="why-us-about">
                <div class="row display-flex">
                    <div class="col-md-6 col-xs-12">
                        <div class="why-about-inner">
                            <h4>{{$setting['about_us_subtitle']??''}}</h4>
                            <h2>{{$setting['about_us_section_title']??''}}</h2>
                            <p class="mar-bottom-25">{!!$setting['about_us_section_text']??''   !!}</p>
                            <a href="#" class="biz-btn biz-btn1">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="why-about-image">
                                    <img src="{{asset($setting['about_us_image_one']??'')}}" alt="about">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="why-about-image">
                                    <img src="{{asset($setting['about_us_image_two']??'')}}" alt="about">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why us about ends -->

	@endsection