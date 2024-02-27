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
                    <li class="breadcrumb-item active" aria-current="page">All Appointment list</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Appointment Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                    <tbody>
                        @if ($appointment->count() > 0)
                        @foreach ($appointment as $key => $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item['patient']['patient_name']}}</td>
                                <td>{{$item['doctor']['name']}}</td>
                                <td>{{$item->appointment_date}}</td>
                                <td>
                                @if ($item->status == 'pending')
                                <span class="badge badge-pill bg-warning">Pending</span>
                                @elseif ($item->status == 'confirmed')
                                <span class=" badge badge-pill bg-success" href="">Confirmed</span>
                                @elseif ($item->status  == 'cancelled')
                                <span class="badge badge-pill bg-danger" href="">Cancelled</span>
                                @endif
                               </td>
                                <td>
                                    @if ($item->status  == 'pending')
                                    <a class="btn btn-sm btn-success" href="{{route('appointment.approve',$item->id)}}">Approve</a>
                                    @elseif($item->status  == 'cancelled')
                                    <a class="btn btn-sm btn-success" href="{{route('appointment.approve',$item->id)}}">ReApprove</a>
                                    @elseif($item->status  == 'confirmed')
                                    <a class="btn btn-sm btn-warning" href="{{route('appointment.canceled',$item->id)}}">Cancel</a>
                                    @endif
                                   <a href="{{route('appointment.delete',$item->id)}}" id="delete" class="btn btn-sm btn-danger">Delete</a></td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6" class="text-center">No Data found</td>
                            </tr>
                            @endif
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Patient Name</th>
                                    <th>Doctor Name</th>
                                    <th>Appointment Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
