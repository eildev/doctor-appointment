@extends('backend.admin_master')
@section('admin')
<div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
              <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4>Edit Image Or Video</h4><br>
            <div class="page-title-right">
               <ol class="breadcrumb m-0">
                <li class="breadcrumb-item active">
                    <a href="{{route('view.image.video')}}" class=" btn btn-sm btn-primary text-light fs-4"> +</a>
                </li>
              </ol>
            </div>
            </div>
                <hr>
                <form action="{{route('update.image.video',$data->id)}}" id="myForm" method="post" enctype="multipart/form-data"  >
                    @csrf

                <!-- end row -->
                <div class="row mb-3">
                    <label for="institution_namet" class="col-sm-2 col-form-label">Section Name</label>
                    <div class="col-sm-10 form-group">
                        <input class="form-control" name="section_name" type="text" placeholder="Enter Section name" value="{{$data->section_name}}" id="institution_namet">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="institution_namet2" class="col-sm-2 col-form-label">Media Url</label>
                    <div class="col-sm-10 form-group">
                        <input class="form-control"   name="media_url" type="url" placeholder="Enter Video Url"  value="{{$data->media_url}}" id="institution_namet2">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="institution_namet2" class="col-sm-2 col-form-label"> Description</label>
                    <div class="col-sm-10 form-group">
                        <textarea class="form-control" name="description" id="" cols="20" rows="5">{{$data->description}}</textarea>

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="institution_namet3" class="col-sm-2 col-form-label">Media Image Or Video</label>
                    <div class="col-sm-10 form-group">
                        <input name="media_type" class="form-control" type="file" id="image">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="example-url-input" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        @if (Str::endsWith($data->media_type, ['jpg', 'jpeg', 'png', 'gif']))
                            <img id="showImage" class="rounded avatar-lg"
                                src="{{ asset('uploads/image_or_video/'.$data->media_type) }}" width="100px" height="100px" alt="Image/Video">
                            @else
                            <div id="showMedia">
                            <video autoplay controls height="200px" width ="200px" src="{{ asset('uploads/image_or_video/'.$data->media_type) }}"></video>
                            @endif
                        </div>
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
                section_name: {
                    required : true,
                },
                media_url: {
                    required : true,
                },
                // media_type: {
                //     required : true,
                // },
                description: {
                    required : true,
                },
            },
            messages :{
                section_name: {
                    required : 'Please Enter Section Name',
                },
                media_url: {
                    required : 'Please Enter Media Url',
                },
                // media_type: {
                //     required : 'Please Select Image or Video',
                // },
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
