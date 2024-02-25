@extends('backend.admin_master')
@section('admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4>Education Training  list</h4><br>
                     <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item active">
                             <a href="{{route('add.education.training')}}" class=" btn btn-sm btn-primary text-light fs-4"> +</a>
                         </li>
                       </ol>
                     </div>
                     </div>
                  

                    <table id="datatable" class="table dt-responsive nowrap w-100">
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
                                    <a class="btn btn-sm btn-warning" href=""><i class="fas fa-edit"></i></a>

                                <a href="" id="delete" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection
