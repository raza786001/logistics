@extends('admin.layouts.app')
@section('content')


<!--Page content-->
                <!--===================================================-->
                <div id="page-content">

				@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
                    
					    <!-- Basic Data Tables -->
					<!--===================================================-->
					<div class="panel">
					    <div class="panel-heading">
					        <h3 class="panel-title">Categories</h3>
					    </div>
					    <div class="panel-body">
					        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
					            <thead>
					                <tr>
					                    <th>#</th>
					                    <th>Name</th>
					                    <th class="min-tablet">Images</th>
					                    <th class="min-desktop">Start date</th>
					                    <th class="min-desktop">Actions</th>
					                </tr>
					            </thead>
					            <tbody>
									@foreach($categories as $key => $cat)
					                <tr>
					                    <td>{{$key+1}}</td>
					                    <td>{{$cat->name}}</td>
					                    <td>
										<img class="tableimage_cat rounded" width="25" src="{{asset('storage/images/categories/'.$cat->image)}}" alt="Image placeholder" >
										</td>
					                    <td>{{$cat->created_at}}</td>
										
					                    <td>
											<a class="btn btn-info" href="{{url('admin/categories/'.$cat->id)}}" data-toggle="tooltip" data-original-title="{{__('Edit category')}}">
												<!-- <i class="fa fa-edit"></i> -->Edit
											</a>
											<a class="btn btn-danger" href="{{route('category.delete', $cat->id)}}" onclick="return confirm('Are you sure ,You want to delete this Category ?')" data-toggle="tooltip" data-original-title="{{__('Edit category')}}">
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
                <!--===================================================-->
                <!--End page content-->
                @endsection