@extends('admin.layouts.app')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                <div class="row match-height">
                 

                    <!-- Customers Chart Card starts -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header flex-column align-items-start pb-2">
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="users" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="font-weight-bolder mt-1">{{$messageCount}}</h2>
                                <p class="card-text">Customers</p>
                            </div>
                        </div>
                    </div>
                    <!-- Customers Chart Card ends -->

                    <!-- Jobs Chart Card starts -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header flex-column align-items-start pb-0">
                                <div class="avatar bg-light-warning p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="briefcase" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="font-weight-bolder mt-1">{{$carsCount}}</h2>
                                <p class="card-text">Cars</p>
                            </div>
                         
                        </div>
                    </div>
                    <!-- Jobs Chart Card ends -->

                    <!-- Users Chart Card starts -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header flex-column align-items-start pb-0">
                                <div class="avatar bg-light-warning p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="users" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="font-weight-bolder mt-1">{{$companyCount}}</h2>
                                <p class="card-text">Company</p>
                            </div>
                         
                        </div>
                    </div>
                    <!-- Users Chart Card ends -->
                    <div class="row match-height">
                        <!-- Company Table Card -->
                        <div class="col-lg-8 col-12">
                            <div class="card card-company-table">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Company</th>
                                                    <th>Category</th>
                                                    <th>Views</th>
                                                    <th>Revenue</th>
                                                    <th>Sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="../../../app-assets/images/icons/toolbox.svg" alt="Toolbar svg" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="font-weight-bolder">Dixons</div>
                                                                <div class="font-small-2 text-muted">meguc@ruj.io</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar bg-light-primary mr-1">
                                                                <div class="avatar-content">
                                                                    <i data-feather="monitor" class="font-medium-3"></i>
                                                                </div>
                                                            </div>
                                                            <span>Technology</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <span class="font-weight-bolder mb-25">23.4k</span>
                                                            <span class="font-small-2 text-muted">in 24 hours</span>
                                                        </div>
                                                    </td>
                                                    <td>$891.2</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bolder mr-1">68%</span>
                                                            <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="../../../app-assets/images/icons/parachute.svg" alt="Parachute svg" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="font-weight-bolder">Motels</div>
                                                                <div class="font-small-2 text-muted">vecav@hodzi.co.uk</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar bg-light-success mr-1">
                                                                <div class="avatar-content">
                                                                    <i data-feather="coffee" class="font-medium-3"></i>
                                                                </div>
                                                            </div>
                                                            <span>Grocery</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <span class="font-weight-bolder mb-25">78k</span>
                                                            <span class="font-small-2 text-muted">in 2 days</span>
                                                        </div>
                                                    </td>
                                                    <td>$668.51</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bolder mr-1">97%</span>
                                                            <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="../../../app-assets/images/icons/brush.svg" alt="Brush svg" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="font-weight-bolder">Zipcar</div>
                                                                <div class="font-small-2 text-muted">davcilse@is.gov</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar bg-light-warning mr-1">
                                                                <div class="avatar-content">
                                                                    <i data-feather="watch" class="font-medium-3"></i>
                                                                </div>
                                                            </div>
                                                            <span>Fashion</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <span class="font-weight-bolder mb-25">162</span>
                                                            <span class="font-small-2 text-muted">in 5 days</span>
                                                        </div>
                                                    </td>
                                                    <td>$522.29</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bolder mr-1">62%</span>
                                                            <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="../../../app-assets/images/icons/star.svg" alt="Star svg" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="font-weight-bolder">Owning</div>
                                                                <div class="font-small-2 text-muted">us@cuhil.gov</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar bg-light-primary mr-1">
                                                                <div class="avatar-content">
                                                                    <i data-feather="monitor" class="font-medium-3"></i>
                                                                </div>
                                                            </div>
                                                            <span>Technology</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <span class="font-weight-bolder mb-25">214</span>
                                                            <span class="font-small-2 text-muted">in 24 hours</span>
                                                        </div>
                                                    </td>
                                                    <td>$291.01</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bolder mr-1">88%</span>
                                                            <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="../../../app-assets/images/icons/book.svg" alt="Book svg" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="font-weight-bolder">Cafés</div>
                                                                <div class="font-small-2 text-muted">pudais@jife.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar bg-light-success mr-1">
                                                                <div class="avatar-content">
                                                                    <i data-feather="coffee" class="font-medium-3"></i>
                                                                </div>
                                                            </div>
                                                            <span>Grocery</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <span class="font-weight-bolder mb-25">208</span>
                                                            <span class="font-small-2 text-muted">in 1 week</span>
                                                        </div>
                                                    </td>
                                                    <td>$783.93</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bolder mr-1">16%</span>
                                                            <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="../../../app-assets/images/icons/rocket.svg" alt="Rocket svg" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="font-weight-bolder">Kmart</div>
                                                                <div class="font-small-2 text-muted">bipri@cawiw.com</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar bg-light-warning mr-1">
                                                                <div class="avatar-content">
                                                                    <i data-feather="watch" class="font-medium-3"></i>
                                                                </div>
                                                            </div>
                                                            <span>Fashion</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <span class="font-weight-bolder mb-25">990</span>
                                                            <span class="font-small-2 text-muted">in 1 month</span>
                                                        </div>
                                                    </td>
                                                    <td>$780.05</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bolder mr-1">78%</span>
                                                            <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar rounded">
                                                                <div class="avatar-content">
                                                                    <img src="../../../app-assets/images/icons/speaker.svg" alt="Speaker svg" />
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="font-weight-bolder">Payers</div>
                                                                <div class="font-small-2 text-muted">luk@izug.io</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="avatar bg-light-warning mr-1">
                                                                <div class="avatar-content">
                                                                    <i data-feather="watch" class="font-medium-3"></i>
                                                                </div>
                                                            </div>
                                                            <span>Fashion</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap">
                                                        <div class="d-flex flex-column">
                                                            <span class="font-weight-bolder mb-25">12.9k</span>
                                                            <span class="font-small-2 text-muted">in 12 hours</span>
                                                        </div>
                                                    </td>
                                                    <td>$531.49</td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span class="font-weight-bolder mr-1">42%</span>
                                                            <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Company Table Card -->

                        <!-- Developer Meetup Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="../../../app-assets/images/illustration/email.svg" alt="Meeting Pic" height="170" />
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex align-items-center">
                                        <div class="meetup-day">
                                            <h6 class="mb-0">THU</h6>
                                            <h3 class="mb-0">24</h3>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="card-title mb-25">Developer Meetup</h4>
                                            <p class="card-text mb-0">Meet world popular developers</p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="avatar bg-light-primary rounded mr-1">
                                            <div class="avatar-content">
                                                <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Sat, May 25, 2020</h6>
                                            <small>10:AM to 6:PM</small>
                                        </div>
                                    </div>
                                    <div class="media mt-2">
                                        <div class="avatar bg-light-primary rounded mr-1">
                                            <div class="avatar-content">
                                                <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0">Central Park</h6>
                                            <small>Manhattan, New york City</small>
                                        </div>
                                    </div>
                                    <div class="avatar-group">
                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Billy Hopkins" class="avatar pull-up">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="33" height="33" />
                                        </div>
                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Amy Carson" class="avatar pull-up">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="Avatar" width="33" height="33" />
                                        </div>
                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Brandon Miles" class="avatar pull-up">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="Avatar" width="33" height="33" />
                                        </div>
                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Daisy Weber" class="avatar pull-up">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33" />
                                        </div>
                                        <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Jenny Looper" class="avatar pull-up">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33" />
                                        </div>
                                        <h6 class="align-self-center cursor-pointer ml-50 mb-0">+42</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Developer Meetup Card -->

                    </div>

                </div>
            </section>
            <!-- Dashboard Analytics end -->


        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
