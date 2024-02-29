@extends('backend.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Social Link </h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Edit</a></li>
                            <li class="breadcrumb-item active">Update Social link</li>
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
                        <form action="{{ route('update.social.icon', $data->id) }}" id ="myForm" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Website Name</label>
                                <div class="col-sm-10 form-group">
                                    <input class="form-control" type="text" placeholder="Enter Social Icon Name"
                                        id="example-text-input" name="platform_name" value="{{ $data->platform_name }}">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Facebook</label>
                                <div class="col-sm-10 form-group">
                                    <input class="form-control" type="url" placeholder="Please provide facebook link"
                                        id="example-search-input" value="{{ $data->facebook}}" name="facebook">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Instragram</label>
                                <div class="col-sm-10 form-group">
                                    <input class="form-control" type="url" placeholder="Please provide instragram link"
                                        id="example-search-input" value="{{ $data->instragram }}" name="instragram">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Twitter</label>
                                <div class="col-sm-10 form-group">
                                    <input class="form-control" type="url" placeholder="Please provide Twitter link"
                                        id="example-search-input" value="{{ $data->twitter }}" name="twitter">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-search-input" class="col-sm-2 col-form-label">linkdin</label>
                                <div class="col-sm-10 form-group">
                                    <input class="form-control" type="url" value="{{ $data->linkdin}}" placeholder="Please provide linkdin link"
                                        id="example-search-input" name="linkdin">
                                </div>
                            </div>
                            <center><P>If you have any other social media links, please provide them here. (Optional)</P></center>
                            <div class="row mb-3">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Other</label>
                                <div class="col-sm-10 form-group">
                                    <input class="form-control" type="url" placeholder="Please provide social link"
                                        id="example-search-input" name="other_link">
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
                    platform_name: {
                        required : true,
                    },
                    facebook: {
                        required : true,
                    },
                    instragram: {
                        required : true,
                    },
                    twitter: {
                        required : true,
                    },
                    linkdin: {
                        required : true,
                    },

                },
                messages :{
                    platform_name: {
                        required : 'Please Enter Platform Name',
                    },
                    facebook: {
                        required : 'Please Enter Facebook link',
                    },
                    instragram: {
                        required : 'Please Enter instragram link',
                    },
                    twitter: {
                        required : 'Please Enter twitter link',
                    },
                    linkdin: {
                        required : 'Please Enter linkdin link',
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
