@extends('backend.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Review</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item active">
                             <a href="{{route('add.review')}}" class=" btn btn-sm btn-primary text-light fs-4"> +</a>
                         </li>
                       </ol>
                     </div>

                </div>
            </div>
        </div>
        <br>
        <!-- end page title -->
<br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Patient Name</th>
                                        <th>Rating</th>
                                        <th>Comment</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($review->count() > 0)
                                        @foreach ($review as $key => $data)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $data->patient_name }}</td>
                                                <td>{{ $data->rating }} <span class="text-warning text-center">⭐</span></td>
                                                <td>{{ $data->comment }}</td>
                                                <td>{{ $data->date }}</td>

                                                <td>
                                                    <a href="{{ route('edit.review', $data->id) }}"
                                                        class="btn  btn-sm bg-warning" title="Edit">
                                                      Edit
                                                    </a>
                                                    <a id="delete" href="{{ route('delete.review', $data->id) }}"
                                                        class="btn btn-sm bg-danger" title="delete">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center"> Data not Found</td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->


    </div>
@endsection
