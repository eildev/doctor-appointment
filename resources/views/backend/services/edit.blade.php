@extends('backend.admin_master')
@section('admin')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card border-top border-0 border-3 border-info">
                <form action="{{ route('update.services', $services->id) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="border p-4 rounded">

                            <div class="card-title d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 text-info">Update Services</h5>

                                <a href="{{ route('service.view') }}" class="btn btn-info btn-sm fs-2 text-light ">
                                 +
                                </a>
                            </div>

                            <hr>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Services Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid  @enderror" id="inputEnterYourName"
                                        value="{{ $services->name }}" placeholder="Enter Services Name">
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="dr_id">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control @error('description') is-invalid  @enderror" name="description"
                                        placeholder="Enter Description" style="resize: none; height: 100px;" id="product_descriptions">{{ $services->description }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-3 col-form-label">Price</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control  @error('price') is-invalid  @enderror"
                                        name="price" placeholder="Enter Doctor Qualification"
                                        value="{{ $services->price }}">
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-info px-5">Update Services</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
