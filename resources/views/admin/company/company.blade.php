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
            <!-- Staff list start -->
            <section class="app-user-list">
                <!-- list section start -->
                <div class="card">
                    <div class="card-datatable table-responsive pt-0">
                        <table class="user-list-table table" >
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Company</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($companies as $company)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$company->name}}</td>
                                    <td>
                                        <span class="badge badge-pill badge-light-{{$company->status == '1' ? 'success':'danger'}} mr-1 ">{{$company->status == '1' ? 'Active':'Inactive'}}</span>
                                    </td>
                                    <td>
                                        <a href="" class="text-warning edit-company" data-id={{$company->id}} ><i data-feather='edit'></i></a>
                                        <a href="{{Route('admin.delete.company',$company->id)}}" class="text-danger confirm-remove-country"><i data-feather='trash'></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Modal to add new user starts-->
                    <div class="modal modal-slide-in new-user-modal fade" id="modals-country-slide-in">
                        <div class="modal-dialog">
                            <form method="POST" action="{{Route('admin.store.company')}}" class="add-new-user modal-content pt-0" id="jquery-country-form">
                                @csrf
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">New Company</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="form-group">
                                        <label class="form-label" for="basic-icon-default-fullname">Company Name</label>
                                        <input type="text" class="form-control dt-full-name @error('company') is-invalid @enderror" id="basic-icon-default-fullname" placeholder="Enter Name" name="name" value="{{old('name')}}" aria-describedby="basic-icon-default-fullname2" />
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="status">Status</label>
                                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                                            <option value="" selected disabled>Select Status</option>
                                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Disable</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-1 data-submit">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Modal to add new user Ends-->

                    <!-- Modal to edit user starts-->
                    <div class="modal modal-slide-in new-user-modal fade" id="edit-modals-country">
                        <div class="modal-dialog" id="country-edit-body">

                        </div>
                    </div>
                    <!-- Modal to edit user Ends-->
                </div>
                <!-- list section end -->
            </section>
            <!-- users list ends -->
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
            text: "You want to remove this Country!",
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
    $(document).on('click','.edit-company',function(e){
		e.preventDefault();
        var edit_id = $(this).attr('data-id');
        $.ajax({
            url: "{{url('admin/edit-company')}}/"+edit_id+"",
            type: "GET",
            success: function (data) {
                console.log(data.error);
                if(data.error)
                {
                    toastr.error('Something went wrong');
                    $('#edit-modals-country').modal('hide');
                    $('#edit-modals-country').on('hidden.bs.modal', function () {
                        $(this).modal('hide');
                    });
                }
                else
                {
                    $('#country-edit-body').empty().append(data);
                    $('#edit-modals-country').modal('show');
                }
            },
        });
    });
</script>
<script>
    //////////////////////////////////////////// Staff Page ///////////////////////////////////
$(function () {
    'use strict';

    var dtCountryTable = $('.user-list-table');

    // Users List datatable
    if (dtCountryTable.length)
    {
        dtCountryTable.DataTable({
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
            text: 'Add New Company',
            className: 'add-new btn btn-primary mt-50',
            attr: {
              'data-toggle': 'modal',
              'data-target': '#modals-country-slide-in'
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

