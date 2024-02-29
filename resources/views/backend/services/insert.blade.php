@extends('backend.admin_master')
@section('admin')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card border-top border-0 border-3 border-info">
                <form action="{{ Route('store.services') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="card-body">
                        <div class="border p-4 rounded">

                            <div class="card-title d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 text-info">Add Services</h5>

                                <a href="{{ route('service.view') }}" class="btn btn-info btn-sm text-light ">
                                    +
                                </a>
                            </div>

                            <hr>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Services Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid  @enderror" id="inputEnterYourName"
                                        value="{{ old('name') }}" placeholder="Enter Services Name">
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="dr_id">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control @error('description') is-invalid  @enderror" name="description" placeholder="Enter Dr Bio"
                                        style="resize: none; height: 100px;" id="product_descriptions"></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-3 col-form-label">Price</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control  @error('price') is-invalid  @enderror"
                                        name="price" placeholder="Enter Price">
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                            <label for="example-input" class="col-sm-3 col-form-label">Service Image</label>
                            <div class="col-sm-9 ">
                                <input name="service_image" class="form-control @error('service_image') is-invalid  @enderror" type="file"  id="image">
                            </div>
                          </div>
                <!-- end row -->
                <div class="row mb-3">
                    <label for="example-url-input" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <img id="showImage" class="rounded avatar-lg " src="{{asset('uploads/no_image/images.png')}}" height="100px" width="100px"  alt="Gallery Image">
                        @error('service_image')
                        <span class="text-danger">{{ $message }}</span>
                       @enderror
                    </div>

                </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-info px-5">Add Services</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end row-->
@endsection
