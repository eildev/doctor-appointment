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
                    <li class="breadcrumb-item active" aria-current="page">All Patient</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                 <li class="breadcrumb-item active">
                     <a href="{{route('add.patient')}}" class=" btn btn-sm btn-primary text-light fs-4"> +</a>
                 </li>
               </ol>
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
                            <th>Patient Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($allData->count() > 0)
                            @foreach ($allData as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->patient_name, 15) }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->mobile, 15) }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->email, 15) }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->address, 15) }}</td>
                                    <td>
                                        <a href="{{ route('patient.edit', $item->id) }}"
                                            class="btn btn-sm edit bg-warning" title="Edit">
                                            Edit
                                        </a>
                                        <a id="delete" href="{{ route('patient.delete', $item->id) }}"
                                            class="btn btn-sm edit bg-danger" title="delete">
                                            Delete
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
