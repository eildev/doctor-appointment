@extends('backend.admin_master')
@section('admin')

<div class="page-content">
<div class="container-fluid">


<div class="row">
    <div class="col-lg-6">
        <div class="card"><br><br>
        <center>
            <img class="rounded-circle avatar-xl" src="{{(!empty($adminData->photo)) ?url('admin_image/profile/'.$adminData->photo): url('admin_image/profile/no_images.png')}}" style="height:100px;width:100px" alt="Card image cap">
      </center>

            <div class="card-body">
                <h4 class="card-title">Name : {{$adminData->name}} </h4>
                <hr>
                <h4 class="card-title">Admin Email :  {{$adminData->email}} </h4>
                <hr>
                <h4 class="card-title">Admin userame :  {{$adminData->username}} </h4>
                <hr>
                <a href="{{route('admin.profile.edit')}}" class="btn btn-info btn-rounded waves-effect waves-light" > Edit Profile</a>
            </div>
        </div>
    </div>


                        </div>


</div>
</div>

@endsection
