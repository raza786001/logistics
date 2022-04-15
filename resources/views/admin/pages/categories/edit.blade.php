@extends('admin.layouts.app')
@section('content')


<!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
                <div class="panel">
					    <div class="panel-heading">
					        <h3 class="panel-title">Inline Form</h3>
					    </div>
					    <div class="panel-body">
					
					        <!-- Inline Form  -->
					        <!--===================================================-->
				<!--author:ahmad khalil:- id taken in hidden field to popolate the form for update  -->

					        <form class="form-inline" method="post" action="{{ url('admin/categories/update') }}" enctype='multipart/form-data'>
								@csrf
								@method('PUT')
					            <div class="form-group">
					                <label for="demo-inline-inputmail" class="sr-only">Name</label>
					                <input type="text" placeholder="Enter Categories" value="{{ $category->name }}"name="name" id="demo-inline-inputmail" class="form-control">
					                <input type="hidden" placeholder="Enter Categories"value="{{ $category->id }}" name="id" id="demo-inline-inputmail" class="form-control">
					            </div>
					            <div class="form-group">
					                <label for="demo-inline-inputpass" class="sr-only">Image</label>
					                <input type="file" placeholder="Image" accept="image/*" name="image" id="demo-inline-inputpass" class="form-control">
					            </div>
					            
					            <button class="btn btn-primary" type="submit">Submit</button>
					        </form>
					        <!--===================================================-->
					        <!-- End Inline Form  -->
					
					    </div>
					</div>
					
					
					    
                </div>
                <!--===================================================-->
                <!--End page content-->

                @endsection