@extends('backend.admin_master')
@section('admin')
<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
              <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4>Edit Consulting Center</h4><br>
            <div class="page-title-right">
               <ol class="breadcrumb m-0">
                <li class="breadcrumb-item active">
                    <a href="{{route('view.consulting.center')}}" class=" btn btn-sm btn-primary text-light fs-4"> +</a>
                </li>
              </ol>
            </div>
            </div>
                <hr>
                <form action="{{route('update.consulting.center',$consulting_centers->id)}}" id="myForm" method="post"   >
                    @csrf

                <!-- end row -->
                <div class="row mb-3">
                    <label for="institution_namet" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10 form-group">
                        <input class="form-control" value="{{$consulting_centers->name}}"  name="name" type="text" placeholder="Enter  name" id="institution_namet">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="institution_namet2" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10 form-group">
                        <input class="form-control" value="{{$consulting_centers->address}}"  name="address" type="text" placeholder="Enter Address" id="institution_namet2">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="institution_namet3" class="col-sm-2 col-form-label">Contact Email</label>
                    <div class="col-sm-10 form-group">
                        <input class="form-control"  name="contact_email" value="{{$consulting_centers->contact_email}}" type="email" placeholder="Enter Email Address" id="institution_name3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="institution_namet4" class="col-sm-2 col-form-label">Contact Number</label>
                    <div class="col-sm-10 form-group">
                        <input class="form-control" value="{{$consulting_centers->contact_number}}"  name="contact_number" type="text" placeholder="Enter Contact Number" id="institution_name4">
                    </div>
                </div>



                <!-- end row -->

                <div class="row mb-3">
                    <label for="example-number-input" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input  type="submit" value="Update" class="btn btn-info ">
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
                name: {
                    required : true,
                },
                address: {
                    required : true,
                },
                contact_email: {
                    required : true,
                },
                contact_number: {
                    required : true,
                },
            },
            messages :{
                name: {
                    required : 'Please Enter Consulting Name',
                },
                address: {
                    required : 'Please Enter Address',
                },
                contact_email: {
                    required : 'Please Enter Contact Email',
                },
                contact_number: {
                    required : 'Please Enter Contuct Number',
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
