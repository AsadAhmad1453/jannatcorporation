<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jannat Corporation</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('website-assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!--Default CSS-->
    <link href="{{asset('website-assets/css/default.css')}}" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="{{asset('website-assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!--Color Switcher CSS-->
    <link rel="stylesheet" href="{{asset('website-assets/css/color/color-default.css')}}">
    <!--Plugin CSS-->
    <link href="{{asset('website-assets/css/plugin.css')}}" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="{{asset('website-assets/fonts/flaticon.css')}}" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    @yield('css')
</head>
<body>
    <!-- header starts -->
    <header class="main_header_area">
        <div class="header-content">
            <div class="container">
                <div class="links links-left">
                    <ul>
                        <li><a href="#"><i class="fa fa-phone-alt"></i> {{$setting['phone_number']??''}}</a></li>
                        <li><a href="#"><i class="fa fa-envelope-open"></i> {{$setting['email']??''}}</a></li>
                    </ul>
                </div>
                <div class="links links-right pull-right">
                    <ul>
                        <li>
                            <div class="header_sidemenu">
                                <div class="menu">
                                    <div class="close-menu">
                                        <i class="fa fa-times white"></i>
                                    </div>
                                     <div class="m-contentmain">
                                        <div class="m-logo mar-bottom-30">
                                            <img src="{{asset($setting['company_logo']??'')}}" alt="image" width="50px" height="50px">
                                        </div>

                                        <div class="content-box mar-bottom-30">
                                            <h3 class="white">Get In Touch</h3>
                                            <p class="white">{!!$setting['get_in_touch_text']??''!!}</p>
                                            <a href="#" class="biz-btn biz-btn1">Send Message</a>
                                        </div>

                                        <div class="contact-info">
                                                <h4 class="white">Contact Info</h4>
                                                <ul>
                                                    <li><i class="fa fa-map-marker-alt"></i>{{$setting['location']??''}}</li>
                                                    <li><i class="fa fa-phone-alt"></i>{{$setting['phone_number']??''}}</li>
                                                    <li><i class="fa fa-envelope-open"></i>{{$setting['email']??''}}</li>
                                                </ul>
                                            </div>
                                    </div>    
                                </div>

                                <div class="mhead">
                                    <span class="menu-ham"><i class="fa fa-bars white"></i></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Navigation Bar -->
        <div class="header_menu affix-top">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{asset($setting['company_logo']??'')}}" alt="image" width="100px" height="100px">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="  {{Route::is('homepage')?'active':''}}">
                                    <a href="{{route('homepage')}}" class="dropdown-toggle"  >Home </a>  
                                </li>
                                <li class="   {{Route::is('carpage')?'active':''}}">
                                    <a href="{{route('carpage')}}" class="dropdown-toggle"  >Cars </a>  
                                </li>
                                <li class="  {{Route::is('aboutus-page')?'active':''}} ">
                                    <a href="{{route('aboutus-page')}}" class="dropdown-toggle" >About us </a>  
                                </li>
                                {{-- <li class="  {{Route::is('contactus-page')?'active':''}}">
                                    <a href="{{route('contactus-page')}}" class="dropdown-toggle"  >Contact us </a>  
                                </li> --}}
                                
                            </ul>
                        </div><!-- /.navbar-collapse -->
                        <div id="slicknav-mobile"></div>
                    </div>
                </div><!-- /.container-fluid --> 
            </nav>
        </div>
 
        <!-- Navigation Bar Ends -->
    </header>
    <!-- header ends -->

  @yield('content')

    <!-- footer starts -->
    <footer>
        <div class="footer-upper pad-bottom-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="footer-about">
                            <div class="footer-about-in mar-bottom-30">
                                <h3 class="white">{{$setting['footer_contact_heading']??''}}</h3>
                                <div class="footer-phone">
                                    <div class="cont-icon"><i class="flaticon-call"></i></div>
                                    <div class="cont-content mar-left-20">
                                        <p class="mar-0">{!!$setting['footer_contact_description']??''!!}</p>
                                        <p class="bold mar-0"><span>Call Us:</span>{{$setting['phone_number']??''}}</p> 
                                    </div>
                                </div>
                            </div>
                            <h3 class="white">Contact Info</h3>
                                Email: {{$setting['email']??''}}</p>
                            <ul class="social-links">
                                <li><a href="{{$setting['footer_facebook']??''}}"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="{{$setting['footer_twitter']??''}}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="{{$setting['footer_instagram']??''}}"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="{{$setting['footer_linkedin']??''}}"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-links">
                            <h3 class="white">Navigate</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Cars</a></li>
                            </ul>
                        </div>
                    </div>
                  
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="footer-subscribe">
                            <h3 class="white">Send a Message</h3>
                            <p class="white">Quick Contact us </p>
                            <form>
                                <input type="text" placeholder="Your Message">
                                <a href="#" class="biz-btn mar-top-15">Send</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-payment pad-top-30 pad-bottom-30 bg-white">
            <div class="container">
                <div class="pay-main display-flex space-between">
                    <div class="footer-logo pull-left">
                        <a href="index.html"><img src="{{asset($setting['company_logo']??'')}}" alt="image" width="50px" height="50px">
                        </a>
                    </div>
                </div>    
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="copyright-text pull-left">
                    <p class="mar-0">2024 AsadAhmad. All rights reserved.</p>
                </div>
                <div class="footer-nav pull-right">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Cars</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer ends -->
    
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- search popup -->
    <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog">
            <div class="login-content">
                <div class="login-title section-border">
                    <h3>Login</h3>                    
                </div>
                <div class="login-form section-border">
                    <form>
                        <div class="form-group">
                            <input type="email" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Enter password">
                        </div>
                    </form>
                    <div class="form-btn">
                        <a href="#" class="biz-btn biz-btn1">LOGIN</a>
                    </div>
                    <div class="form-group form-checkbox">
                        <input type="checkbox"> Remember Me
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                <div class="login-social section-border">
                    <p>or continue with</p>
                    <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                    <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                </div>
                <div class="sign-up">
                    <p>Do not have an account?<a href="#">Sign Up</a></p>
                </div>                
            </div>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
    </div>

    <div class="modal fade" id="register" role="dialog">
        <div class="modal-dialog">
            <div class="login-content">
                <div class="login-title section-border">
                    <h3>Register</h3>                    
                </div>
                <div class="login-form section-border">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="User Name">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password">
                        </div>
                    </form>
                    <div class="form-btn">
                        <a href="#" class="biz-btn biz-btn1">REGISTER</a>
                    </div>
                    <div class="form-group form-checkbox">
                        <input type="checkbox"> Remember Me
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                <div class="login-social section-border">
                    <p>or continue with</p>
                    <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                    <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                </div>
                <div class="sign-up">
                    <p>Do not have an account?<a href="#">Sign Up</a></p>
                </div>                
            </div>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
    </div>

    <!-- *Scripts* -->
    <script src="{{asset('website-assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('website-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('website-assets/js/color-switcher.js')}}"></script>
    <script src="{{asset('website-assets/js/plugin.js')}}"></script>
    <script src="{{asset('website-assets/js/main.js')}}"></script>
    <script src="{{asset('website-assets/js/menu.js')}}"></script>
    <script src="{{asset('website-assets/js/custom-swiper2.js')}}"></script>
    <script src="{{asset('website-assets/js/custom-nav.js')}}"></script>
    {{-- <script src="{{asset('website-assets/js/custom-date.js')}}"></script> --}}
    @yield('js')
</body>
</html>