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
                    <li class="breadcrumb-item active" aria-current="page">All Home Slider</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('add.slider')}}" class="btn btn-sm btn-primary text-light fs-4">+</a>
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
                            <th>Short Caption</th>
                            <th>Long Caption</th>
                            <th>Slider link</th>
                            <th>Slider Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($sliders as $key => $item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$item->short_caption}}</td>
                            <td>{{$item->long_caption}}</td>
                            <td>{{$item->slider_links}}</td>
                            <td><img style="height: 60px; width:60px" src="{{asset('uploads/slider_image/'.$item->slider_image)}}" alt="Slider Image"></td>

                            <td>
                                <a class="btn btn-sm btn-warning" href="{{route('edit.slider',$item->id)}}">Edit</a>

                            <a href="{{route('delete.slider',$item->id)}}" id="delete" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
