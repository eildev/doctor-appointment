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
                    <li class="breadcrumb-item active" aria-current="page">All Consulting Center</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('add.consulting.center')}}" class="btn btn-sm btn-primary text-light fs-4">+</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Consulting Name</th>
                            <th>Address</th>
                            <th>Contact Email</th>
                            <th>Contact Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($consulting_centers->count() > 0)
                       @foreach ($consulting_centers as $key => $item)
                       <tr>
                           <td>{{$key+1}}</td>
                           <td>{{$item->name}}</td>
                           <td>{{$item->address}}</td>
                           <td>{{$item->contact_email}}</td>
                           <td>{{$item->contact_number}}</td>
                           <td>
                               <a class="btn btn-sm btn-warning" href="{{route('edit.consulting.center',$item->id)}}">Edit</a>

                           <a href="{{route('delete.consulting.center',$item->id)}}" id="delete" class="btn btn-sm btn-danger">
                            Delete</a></td>
                           </tr>
                       @endforeach
                       @else
                       <tr>
                           <td colspan="6" class="text-center">No Data found</td>
                       </tr>
                       @endif

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Consulting Name</th>
                            <th>Address</th>
                            <th>Contact Email</th>
                            <th>Contact Number</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
