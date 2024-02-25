@extends('backend.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
              <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4>Add Education And Training</h4><br>
            <div class="page-title-right">
               <ol class="breadcrumb m-0">
                <li class="breadcrumb-item active">
                    <a href="{{route('view.education.training')}}" class=" btn btn-sm btn-primary text-light fs-4"> +</a>
                </li>
              </ol>
            </div>
            </div>
                <hr>
                <form action="{{route('store.education.training')}}" id="myForm" method="post"   >
                    @csrf

                <!-- end row -->
                <div class="row mb-3">
                    <label for="institution_namet" class="col-sm-2 col-form-label">Institution Name</label>
                    <div class="col-sm-10 form-group">
                        <input class="form-control  @error('institution_name') is-invalid  @enderror" name="institution_name" " type="text" placeholder="Enter your institution name" id="institution_namet">
                        @error('institution_name')
                        <span id="name_error" class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="example-input" class="col-sm-2 col-form-label">Degree</label>
                    <div class="col-sm-10 form-group">
                        <input class="form-control @error('degree') is-invalid  @enderror" type="text" name="degree" placeholder="Degree" id="example-input">
                        @error('degree')
                        <span id="name_error" class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div>
                <!-- end row -->
                <div class="row mb-3">
                    <label for="example-url-input" class="col-sm-2 col-form-label">Start Year </label>
                    <div class="col-sm-10">
                        <input class="form-control form-group @error('start_year') is-invalid  @enderror" name="start_year" type="number" placeholder="Enter Start Year" id="example-url-input">
                        @error('start_year')
                        <span id="name_error" class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="example-url-input" class="col-sm-2 col-form-label">End Year </label>
                    <div class="col-sm-10 form-group">
                        <input class="form-control @error('end_year') is-invalid  @enderror" name="end_year" type="number" placeholder="Enter End Year" id="example-url-input">
                        @error('end_year')
                        <span id="name_error" class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                </div>
                <!-- end row -->

                <div class="row mb-3">
                    <label for="example-number-input" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input  type="submit" value="submit" class="btn btn-info ">
                    </div>
                </div>
            </form>
                <!-- end row -->
            </div>
        </div>
    </div> <!-- end col -->
</div>

<script type="text/javascript">
    jQuery(document).ready(function (){
        $('#myForm').validate({
            rules: {
                institution_name: {
                    required : true,
                },
                degree: {
                    required : true,
                },
                start_year: {
                    required : true,
                },
                end_year: {
                    required : true,
                },
            },
            messages :{
                institution_name: {
                    required : 'Please Enter your institution nAme',
                },
                degree: {
                    required : 'Please Enter your Degree',
                },
                start_year: {
                    required : 'Please Enter Start Year',
                },
                end_year: {
                    required : 'Please Enter End Year',
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
