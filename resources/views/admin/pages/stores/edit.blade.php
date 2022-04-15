@extends('admin.layouts.app')
@section('content')


<!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
                <div class="panel">
					    <div class="panel-heading">
					        <h3 class="panel-title">Edit Stores Data</h3>
					    </div>
					    <div class="panel-body">
					
					        <!-- Inline Form  -->
					        <!--===================================================-->
							<!--author:ahmad khalil:- id taken in hidden field to popolate the form for update  -->
							<form action="{{ url('admin/stores/update') }}" method="post">
								@csrf
								@method('PUT')
								   <div class="form-group col-lg-6 col-md-6">
									 <label for="">Name</label>
									 <input type="text" name="name" id=""value="{{$stores->name}}" class="form-control" >
									 <input type="hidden" name="id" id=""value="{{$stores->id}}" class="form-control" >
								   </div>
								   <div class="form-group col-lg-6 col-md-6">
									<label for="">Address</label>
									<input type="text" name="address" id=""value="{{$stores->address}}" class="form-control" >
								  </div>
								  <div class="form-group col-lg-4 col-md-4">
										<label for="">phone Number</label>
										<input type="text" name="phone"value="{{$stores->phone}}" id="" class="form-control" >
									  </div>    
									  <div class="form-group col-lg-4 col-md-4">
										<label for="">Category:</label>
									  
										<select class="form-control" name="category" id="">
											@foreach($category as  $cat)
											<option name="category">
												{{$cat->name}}
											</option>
											@endforeach
										</select>
										
									  </div>     
									  <div class="form-group col-lg-4 col-md-4">
										<label for="">Vendor:</label>
									  
										<select class="form-control" name="vendor" id="">
											@foreach($vendor as  $vend)
											<option name="vendor">
												{{$vend->name}}
											</option>
											@endforeach
										</select>
										
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

				