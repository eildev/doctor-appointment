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
                    <li class="breadcrumb-item active" aria-current="page">All Service</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                 <li class="breadcrumb-item active">
                     <a href="{{route('service.add')}}" class=" btn btn-sm btn-primary text-light fs-4"> +</a>
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
                            <th>Services Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($services->count() > 0)
                            @foreach ($services as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->name, 15) }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->description, 15) }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($item->price, 15) }}</td>
                                    <td>
                                        <a href="{{ route('edit.services', $item->id) }}"
                                            class="btn btn-sm edit bg-warning" title="Edit">
                                            Edit
                                        </a>
                                        <a id="delete" href="{{ route('delete.services', $item->id) }}"
                                            class="btn  btn-sm edit bg-danger" title="delete">
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
