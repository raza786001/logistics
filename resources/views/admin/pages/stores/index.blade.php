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
            <h3 class="panel-title">Stores</h3>
        </div>
        <div class="panel-body">
            <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th class="min-tablet">Address</th>
                        <th class="min-tablet">Phone Number</th>
                        <th class="min-desktop">Start date</th>
                        <th class="min-desktop">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stores as $key => $store)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$store->name}}</td>
                        <td>{{$store->address}}</td>
                        <td>{{$store->phone}}</td>
                        
                        <td>{{$store->created_at}}</td>
                        <td>
                            <a class="btn btn-info" href="{{url('admin/stores/'.$store->id)}}" data-toggle="tooltip" data-original-title="{{__('Edit category')}}">
                                <!-- <i class="fa fa-edit"></i> -->Edit
                            </a>
                            <a class="btn btn-danger" href="{{route('stores.delete',$store->id)}}" onclick="return confirm('Are you sure ,You want to delete this Category ?')" data-toggle="tooltip" data-original-title="{{__('Edit category')}}">
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