@extends('backend.admin_master')
@section('admin')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Doctor  Info</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="card-title d-flex justify-content-between align-items-center">


                <a href="{{ route('add.dr.info') }}" class="btn fs-2 btn-info btn-sm text-light ">
                    +<i class="fa-solid fa-eye"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Specialization</th>
                            <th>Qualification</th>
                            <th>Experience</th>
                            <th>Bio</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($allData->count() > 0)
                            @foreach ($allData as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->name, 15) }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->specialization, 15) }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->qualification, 15) }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->experience_years, 15) }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->bio, 15) }}</td>
                                    <td><img style="height: 60px; width:60px" src="{{asset('uploads/dr_image/'.$item->dr_image)}}" alt="Doctor Image"></td>
                                    <td>
                                        <a href="{{ route('edit.dr.info', $item->id) }}"
                                            class="btn btn-sm edit bg-warning" title="Edit">
                                           Edit
                                        </a>
                                        <a id="delete" href="{{ route('delete.dr.info', $item->id) }}"
                                            class="btn  btn-sm bg-danger edit" title="delete">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>No Data found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
