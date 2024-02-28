@extends('backend.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Contact Info </h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item active">
                             <a href="{{route('view.contact.info')}}" class=" btn btn-sm btn-primary text-light fs-4"> +</a>
                         </li>
                       </ol>
                     </div>

                </div>
            </div>
        </div>
        <br>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('update.contact.info',$contact_info->id) }}" id="myForm" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="example--input" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10 form-group">
                                    <input class="form-control" type="text" placeholder="Enter Phone Number"
                                        id="example--input" value="{{$contact_info->phone}}" name="phone">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10 form-group">
                                    <input class="form-control" type="email" placeholder="Enter Your Email "
                                        id="example-text-input" value="{{$contact_info->email}}" name="email">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Opening Hour</label>
                                <div class="col-sm-10 form-group">
                                    <input class="form-control" value="{{$contact_info->opening_hours}}" type="text" placeholder="Please Note opening Hour"
                                        id="example-search-input" name="opening_hours">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10 form-group">
                                    <textarea name="address" class="form-control"cols="30" rows="5">{{$contact_info->address}}</textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-number-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" value="Update" class="btn btn-info ">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>


    </div>
    <script type="text/javascript">
        jQuery(document).ready(function (){
            $('#myForm').validate({
                rules: {
                    phone: {
                        required : true,
                    },
                    email: {
                        required : true,
                    },
                    opening_hours: {
                        required : true,
                    },
                    address: {
                        required : true,
                    },

                },
                messages :{
                    phone: {
                        required : 'Please Enter Phone Number',
                    },
                    email: {
                        required : 'Please Enter Email Address',
                    },
                    opening_hours: {
                        required : 'Please Enter Opening Hour',
                    },
                    address: {
                        required : 'Please Enter address',
                    },

                },
                errorElement : 'span',
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                    $(element).addClass('is-valid');
                },
            });
        });
    </script>
@endsection
