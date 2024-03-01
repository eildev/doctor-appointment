@extends('backend.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All  Faqs</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item active">
                             <a href="{{route('faq.add')}}" class=" btn btn-sm btn-primary text-light fs-4"> +</a>
                         </li>
                       </ol>
                     </div>

                </div>
            </div>
        </div>
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
                                        <th>Question</th>
                                        <th>Answer</th>
                                      
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($faqs->count() > 0)
                                        @foreach ($faqs as $key => $data)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $data->question }}</td>
                                                <td>{{ $data->answer }}</td>

                                                <td>
                                                    <a href="{{ route('faq.edit', $data->id) }}"
                                                        class="btn  btn-sm bg-warning" title="Edit">
                                                      Edit
                                                    </a>
                                                    <a id="delete" href="{{ route('faq.delete', $data->id) }}"
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
