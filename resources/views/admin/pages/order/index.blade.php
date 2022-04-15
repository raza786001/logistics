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
            <h3 class="panel-title">Vendors</h3>
        </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Country Of Warehouse</th>
                        <th>Phone No</th>
                        <th class="min-tablet">Status</th>
                        <th class="min-tablet">Type_Of_Service</th>
                        <th class="min-tablet">Approvements</th>
                        <th class="min-desktop">Total Fees</th>
                        <th class="min-desktop">Created_At</th>
                        <th class="min-desktop">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendors as $key => $vendor)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$vendor->name}}</td>
                        <td>{{$vendor->country_warehouse}}</td>
                        <td>{{$vendor->phone_no}}</td>
                        <td>{{$vendor->status}}</td>
                        <td>{{$vendor->type_of_service}}</td>
                        <td>{{$vendor->approvement}}</td>
                        <td>{{$vendor->total_fees}}</td>
                        
                        <td>{{$vendor->created_at}}</td>
                        <td>
                            <a class="btn btn-info" href="{{url('admin/vendors/'.$vendor->id)}}" data-toggle="tooltip" data-original-title="{{__('Edit category')}}">
                                <!-- <i class="fa fa-edit"></i> -->Edit
                            </a>
                            <a class="btn btn-danger" href="{{route('vendors.delete', $vendor->id)}}" onclick="return confirm('Are you sure ,You want to delete this Category ?')" data-toggle="tooltip" data-original-title="{{__('Edit category')}}">
                                <!-- <i class="fa fa-edit"></i> -->Delete
                            </a>
                            
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