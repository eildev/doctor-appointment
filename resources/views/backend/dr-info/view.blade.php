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
                    <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Settings</button>
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                    data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                        href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
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
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @if ()
                       @foreach ($allData as $key => $item)
                       <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ Illuminate\Support\Str::limit($item->name, 15) }}</td>
                        <td>{{ Illuminate\Support\Str::limit($item->specialization, 15) }}</td>
                        <td>{{ Illuminate\Support\Str::limit($item->qualification, 15) }}</td>
                        <td>{{ Illuminate\Support\Str::limit($item->experience_years, 15) }}</td>
                        <td>{{ Illuminate\Support\Str::limit($item->bio, 15) }}</td>
                        <td></td>
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
