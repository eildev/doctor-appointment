@extends('backend.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Add Hot Link</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item active">
                             <a href="{{route('view.hot.link')}}" class=" btn btn-sm btn-primary text-light fs-4"> +</a>
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
                        <form action="{{ route('store.hot.link') }}" id="myForm" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Hot link Title</label>
                                <div class="col-sm-10 form-group">
                                    <input class="form-control" type="text" placeholder="Enter Hot Link title"
                                        id="example-text-input" name="title">
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Link</label>
                                <div class="col-sm-10 form-group">
                                    <input class="form-control" type="url" placeholder="Please provide social link"
                                        id="example-search-input" name="url">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10 form-group">
                                    <textarea name="description" class="form-control" id="summernote" cols="30" rows="5"></textarea>
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
                    title: {
                        required : true,
                    },
                    url: {
                        required : true,
                    },
                    description: {
                        required : true,
                    },

                },
                messages :{
                    title: {
                        required : 'Please Enter hot link Title',
                    },
                    url: {
                        required : 'Please Enter Url',
                    },
                    description: {
                        required : 'Please Enter Description',
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
