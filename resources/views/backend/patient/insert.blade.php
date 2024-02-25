@extends('backend.admin_master')
@section('admin')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card border-top border-0 border-3 border-info">
                <form action="{{ Route('patient.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="border p-4 rounded">

                            <div class="card-title d-flex justify-content-between align-items-center">
                                <h5 class="mb-0 text-info">Add Patient</h5>

                                <a href="{{ route('view.dr.info') }}" class="btn btn-info btn-sm text-light ">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                            </div>

                            <hr>
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Patient Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="patient_name"
                                        class="form-control @error('patient_name') is-invalid  @enderror"
                                        id="inputEnterYourName" value="{{ old('patient_name') }}"
                                        placeholder="Enter Doctor Name">
                                    <input type="hidden" value="{{ Auth::user()->id }}" name="dr_id">
                                    @error('patient_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-3 col-form-label">Mobile</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control  @error('mobile') is-invalid  @enderror"
                                        name="mobile" placeholder="Enter Doctor Experience">
                                    @error('mobile')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control  @error('email') is-invalid  @enderror"
                                        name="email" placeholder="Enter Patient Mobile Number">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-sm-3 col-form-label">Dr Qualification</label>
                                <div class="col-sm-9">
                                    <input type="text"
                                        class="form-control  @error('dr_qualification') is-invalid  @enderror"
                                        name="dr_qualification" placeholder="Enter Doctor Qualification">
                                    @error('dr_qualification')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-3 form-label">Dr Bio</label>
                                <div class="col-sm-9">
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
@endsection
