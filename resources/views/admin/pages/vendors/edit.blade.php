@extends('admin.layouts.app')
@section('content')


<!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
                <div class="panel">
					    <div class="panel-heading">
					        <h3 class="panel-title">Edit Vendor Data</h3>
					    </div>
					    <div class="panel-body">
					
					        <!-- Inline Form  -->
					        <!--===================================================-->
							<!--author:ahmad khalil:- id taken in hidden field to popolate the form for update  -->
							<form action="{{ url('admin/vendors/update') }}" method="post">
								@csrf
								@method('PUT')
								   <div class="form-group">
									 <label for="">Name</label>
									 <input type="text" name="name" id=""value="{{$vendors->name}}" class="form-control" >
									 <input type="hidden" name="id" id=""value="{{$vendors->id}}" class="form-control" >
								   </div>
								   <div class="form-group">
									<label for="">Email</label>
									<input type="text" name="email" id=""value="{{$vendors->email}}" class="form-control" >
								  </div>
								  <div class="form-group">
									<div class="form-group">
										<label for="">Password</label>
										<input type="text" name="password"value="{{$vendors->password}}" id="" class="form-control" >
									  </div>    
									
								  </div>
								  <button type="submit" class="btn btn-primary">Submit</button>
							   </form>
					        <!--===================================================-->
					        <!-- End Inline Form  -->
					
					    </div>
					</div>
					
					
					    
                </div>
                <!--===================================================-->
                <!--End page content-->

                @endsection