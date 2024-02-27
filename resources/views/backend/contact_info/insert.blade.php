@extends('backend.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Contact Info </h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item active">
                             {{-- <a href="{{route('view.contact.info')}}" class=" btn btn-sm btn-primary text-light fs-4"> +</a> --}}
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
                        <form action="{{ route('store.contact.info') }}" id="myForm" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10 form-group">
                                    <input class="form-control" type="text" placeholder="Enter Phone Number title"
                                        id="example-text-input" name="phone">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10 form-group">
                                    <input class="form-control" type="text" placeholder="Enter Email title"
                                        id="example-text-input" name="email">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10 form-group">
                                    <input class="form-control" type="text" placeholder="Please opening Hour"
                                        id="example-search-input" name="opening_hour">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10 form-group">
                                    <textarea name="address" class="form-control" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-number-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <input type="submit" class="btn btn-info ">
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
                    address: {
                        required : true,
                    },
                    opening_hour: {
                        required : true,
                    },

                },
                messages :{
                    title: {
                        required : 'Please Enter Phone Number,
                    },
                    email: {
                        required : 'Please Enter Email Address',
                    },
                    address: {
                        required : 'Please Enter address',
                    },
                    opening_hour: {
                        required : 'Please Enter Opening Hour',
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
