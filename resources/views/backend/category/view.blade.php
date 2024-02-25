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
                    <li class="breadcrumb-item active" aria-current="page">All Gallery Category Table</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('category.add')}}" class="btn btn-sm btn-primary text-light fs-4">+</a>
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
                            <th>Gallery Category Name</th>
                            <th>Gallery Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($category as $key => $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->category_name}}</td>
                                <td>{{$item->description}}</td>
                                <td>
                                    <a class="btn btn-sm btn-warning" href="{{route('edit.category',$item->id)}}"><i class="fas fa-pencil-alt"></i></a>

                                <a href="{{route('delete.category',$item->id)}}" id="delete" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
