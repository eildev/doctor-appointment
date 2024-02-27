
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
                    <li class="breadcrumb-item active" aria-current="page">All Image/Video</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('add.image.video')}}" class="btn btn-sm btn-primary text-light fs-4">+</a>
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
                            <th>Section Name</th>
                            <th>Image/Video</th>
                            <th>Media Url</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($allData->count() > 0)
                       @foreach ($allData as $key => $item)
                       <tr>
                           <td>{{$key+1}}</td>
                           <td>{{$item->section_name}}</td>
                           @if (Str::endsWith($item->media_type, ['jpg', 'jpeg', 'png', 'gif']))

                           <td><img src="{{ asset('uploads/image_or_video/'.$item->media_type) }}" width="100" height="100" alt="image"></td>
                           @else
                           <td>
                               <video width="100" height="100" autoplay controls>
                                   <source src="{{ asset('uploads/image_or_video/'.$item->media_type) }}" type="video/{{ Str::afterLast($item->media_type, '.') }}">
                               </video>
                           </td>
                       @endif
                           <td>{{$item->media_url}}</td>
                           <td>{{$item->description}}</td>
                           <td>
                               <a class="btn btn-sm btn-warning" href="{{route('edit.image.video',$item->id)}}">Edit</a>

                           <a href="{{route('delete.image.video',$item->id)}}" id="delete" class="btn btn-sm btn-danger">
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
                            <th>Section Name</th>
                            <th>Image/Video</th>
                            <th>Media Url</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
