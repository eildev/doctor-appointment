@extends('backend.admin_master')
@section('admin')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card border-top border-0 border-3 border-info">
                <form action="{{ Route('store.dr.info') }}" id="myForm" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="border p-4 rounded">

                            <div class="card-title d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 text-info">Add Dr Info</h5>

                                <a href="{{ route('view.dr.info') }}" class="btn fs-2 btn-info btn-sm text-light ">
                                    +<i class="fa-solid fa-eye"></i>
                                </a>
                            </div>

                            <hr>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Dr Name</label>
                                <div class="col-sm-9 form-group">
                                    <input type="text" name="dr_name"
                                        class="form-control @error('dr_name') is-invalid  @enderror" id="inputEnterYourName"
                                        value="{{ old('dr_name') }}" placeholder="Enter Doctor Name">
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="dr_id">
                                    @error('dr_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-3 col-form-label">Dr Specialization</label>
                                <div class="col-sm-9 form-group">
                                    <input type="text"
                                        class="form-control  @error('dr_specialization') is-invalid  @enderror"
                                        name="dr_specialization" placeholder="Enter Doctor Specification">
                                    @error('dr_specialization')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-3 col-form-label">Dr Qualification</label>
                                <div class="col-sm-9 form-group">
                                    <input type="text"
                                        class="form-control  @error('dr_qualification') is-invalid  @enderror"
                                        name="dr_qualification" placeholder="Enter Doctor Qualification">
                                    @error('dr_qualification')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label for="image" class="col-sm-3 col-form-label">Dr Experience</label>
                                <div class="col-sm-9 form-group">
                                    <input type="number"
                                        class="form-control  @error('dr_experience') is-invalid  @enderror"
                                        name="dr_experience" placeholder="Enter Doctor Experience">
                                    @error('dr_experience')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 form-label">Dr Bio</label>
                                <div class="col-sm-9 form-group">
                                    <textarea class="form-control @error('dr_bio') is-invalid  @enderror" name="dr_bio" placeholder="Enter Dr Bio"
                                        style="resize: none; height: 100px;" id="product_descriptions"></textarea>
                                    @error('dr_bio')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-info px-5">Add Info</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end row-->
    <script type="text/javascript">
        jQuery(document).ready(function (){
            $('#myForm').validate({
                rules: {
                    dr_name: {
                        required : true,
                    },
                    dr_specialization: {
                        required : true,
                    },
                    dr_qualification: {
                        required : true,
                    },
                    dr_experience: {
                        required : true,
                    },
                    dr_bio: {
                        required : true,
                    },

                },
                messages :{
                    dr_name: {
                        required : 'Please Enter Doctor Name',
                    },
                    dr_specialization: {
                        required : 'Please Enter Doctor Specialization',
                    },
                    dr_qualification: {
                        required : 'Please Enter Doctor Qualification',
                    },
                    dr_experience: {
                        required : 'Please Enter Dr Experience',
                    },
                    dr_bio: {
                        required : 'Please Doctor bio',
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
