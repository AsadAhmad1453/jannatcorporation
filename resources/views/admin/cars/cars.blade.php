@extends('admin.layouts.app')
@section('custom-css')
<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-user.css')}}">
@endsection
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users list start -->
            <section class="app-user-list">
                <!-- list section start -->
                <div class="card">
                    <div class="card-datatable table-responsive pt-0">
                        <table class="user-job-entry-table table" >
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Car</th>
                                    <th>Make</th>
                                    <th>Year</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cars as $car)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$car->title}}</td>
                                        <td>{{$car->model}}</td>
                                        <td>{{$car->registration_year}}</td>
                                        <td>{{$car->location}}</td>
                                        <td>
                                            <a href="{{route('admin.edit.car',$car->id)}}" class="text-warning edit-company"  ><i data-feather='edit'></i></a>
                                            <a href="{{route('admin.delete.car',$car->id)}}" class="text-danger confirm-remove-country"><i data-feather='trash'></i></a>
                                        </td>
                                   </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- list section end -->
            </section>
            <!-- users list ends -->

            <!-- Vertical modal -->
            <div class="vertical-modal-ex">
                <div class="modal fade" id="modals-job-entry" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog  modal-dialog-scrollable modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">New job Entry</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Vertical modal end-->
            <div class="modal fade" id="modals-edit-job-entry" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-scrollable modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">New job Entry</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="job-entry-edit-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
@section('js')
<script>


    $('.confirm-remove-country').on('click', function (event) {
        event.preventDefault();
        var approvalLink = $(this).attr('href');
        Swal.fire({
            icon: 'warning',
            title: 'Are you sure?',
            text: "You want to remove this Job!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, remove it!',
            confirmButtonClass: 'btn btn-primary',
            cancelButtonClass: 'btn btn-danger ml-1',
            buttonsStyling: false,
        }).then(function (result) {
            if (result.value) {
                window.location.href = approvalLink;
            }
        });
    });
</script>
<script>
    //////////////////////////////////////////// Staff Page ///////////////////////////////////
    $(function () {
        'use strict';

        var dtJobEntryTable = $('.user-job-entry-table');

        // Users List datatable
        if (dtJobEntryTable.length)
        {
            dtJobEntryTable.DataTable({
            dom:
            '<"d-flex justify-content-between align-items-center header-actions mx-1 row mt-75"' +
            '<"col-lg-12 col-xl-6" l>' +
            '<"col-lg-12 col-xl-6 pl-xl-75 pl-0"<"dt-action-buttons text-xl-right text-lg-left text-md-right text-left d-flex align-items-center justify-content-lg-end align-items-center flex-sm-nowrap flex-wrap mr-1"<"mr-1"f>B>>' +
            '>t' +
            '<"d-flex justify-content-between mx-2 row mb-1"' +
            '<"col-sm-12 col-md-6"i>' +
            '<"col-sm-12 col-md-6"p>' +
            '>',
            language: {
            sLengthMenu: 'Show _MENU_',
            search: 'Search',
            searchPlaceholder: 'Search..'
            },
            // Buttons with Dropdown
            buttons: [
            {
                text: 'Add New Car',
                className: 'add-new btn btn-primary mt-50',
                // attr: {
                // 'data-toggle': 'modal',
                // 'data-target': '#modals-job-entry'
                // },
                action: function (e, dt, node, config) {
                    window.location.href = '{{ route("admin.upload.car") }}';
                },
                init: function (api, node, config) {
                $(node).removeClass('btn-secondary');
                }
            }
            ],
            language: {
            paginate: {
                previous: '&nbsp;',
                next: '&nbsp;'
            }
            },
        });
        }
    });
</script>

@endsection
@push('js-scripts')
<script src="{{asset('app-assets/js/scripts/pages/app-user-list.js')}}"></script>
@endpush

