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
                    <li class="breadcrumb-item active" aria-current="page">All Edu Training Table</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('add.education.training')}}" class="btn btn-sm btn-primary text-light fs-4">+</a>
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
                            <th>Institution Name</th>
                            <th>Degree</th>
                            <th>Start Year</th>
                            <th>Start Year</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                       @foreach ($eduTrain as $key => $item)
                       <tr>
                           <td>{{$key+1}}</td>
                           <td>{{$item->institution_name}}</td>
                           <td>{{$item->degree}}</td>
                           <td>{{$item->start_year}}</td>
                           <td>{{$item->end_year}}</td>
                           <td>
                               <a class="btn btn-sm btn-warning" href="{{route('edit.education.training',$item->id)}}"><i class="fas fa-edit"></i></a>

                           <a href="{{route('delete.education.training',$item->id)}}" id="delete" class="btn btn-sm btn-danger">
                               <i class="fas fa-trash-alt"></i></a></td>
                           </tr>
                       @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
