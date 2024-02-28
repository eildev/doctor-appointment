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
                    <li class="breadcrumb-item active" aria-current="page">All Doctor</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">

        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Dr.Info</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($allData->count() > 0)
                            @foreach ($allData as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                                style="width: 45px; height: 45px" class="rounded-circle" />
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">John Doe</p>
                                                <p class="text-muted mb-0">john.doe@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ Illuminate\Support\Str::limit($item->email ?? '', 15) }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->mobile ?? '', 15) }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->address ?? '', 15) }}</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="{{ route('patient.edit', $item->id) }}"
                                            class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a id="delete" href="{{ route('patient.delete', $item->id) }}"
                                            class="btn btn-outline-secondary btn-sm edit" title="delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center">No Data found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
