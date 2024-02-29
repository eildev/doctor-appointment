@extends('backend.admin_master')
@section('admin')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Manage Social Settings</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Social </a></li>
                            <li class="breadcrumb-item active">Manage Social Settings</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <!-- end page title -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Platform Name</th>
                                        <th>Facebook</th>
                                        <th>Instragram</th>
                                        <th>Linkdin</th>
                                        <th>Twitter</th>
                                        <th>Other link</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($allData->count() > 0)
                                        @foreach ($allData as $key => $data)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ Illuminate\Support\Str::limit($data->platform_name, 15) }}</td>
                                                <td>{{ Illuminate\Support\Str::limit($data->facebook, 15) }}</td>
                                                <td>{{ Illuminate\Support\Str::limit($data->instragram, 15) }}</td>
                                                <td>{{ Illuminate\Support\Str::limit($data->linkdin, 15) }}</td>
                                                <td>{{ Illuminate\Support\Str::limit($data->twitter, 15) }}</td>
                                                <td>{{ Illuminate\Support\Str::limit($data->other_link, 15) }}</td>

                                                <td>
                                                    <a href="{{ route('edit.social.icon', $data->id) }}"
                                                        class="btn  btn-sm bg-warning" title="Edit">
                                                      Edit
                                                    </a>
                                                    <a id="delete" href="{{ route('delete.social.icon', $data->id) }}"
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
