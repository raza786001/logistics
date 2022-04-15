@extends('admin.layouts.app')
@section('content')
<div id="page-content">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>    
        <strong>{{ $message }}</strong>
    </div>
    @endif
	<div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">System Users</h3>
        </div>
        <div class="panel-body">
            <div class="">
                <a href="{{ url('admin/allusers/show') }}"class="btn btn-primary ">Add system user</a>

            </div>
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th class="min-tablet">Email</th>
                        <th class="min-desktop">Start date</th>
                        <th class="min-desktop">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendors as $key => $vendor)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$vendor->name}}</td>
                        <td>{{$vendor->email}}</td>
                        
                        <td>{{$vendor->created_at}}</td>
                        <td>
                            @can('permission_update')
                            <a class="btn btn-info" href="{{url('admin/vendors/'.$vendor->id)}}" data-toggle="tooltip" data-original-title="{{__('Edit category')}}">
                                <!-- <i class="fa fa-edit"></i> -->Edit
                            </a>
                            <a class="btn btn-danger" href="{{route('vendors.delete', $vendor->id)}}" onclick="return confirm('Are you sure ,You want to delete this Category ?')" data-toggle="tooltip" data-original-title="{{__('Edit category')}}">
                                <!-- <i class="fa fa-edit"></i> -->Delete
                            </a>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--===================================================-->
    <!-- End Striped Table -->
</div>
@endsection