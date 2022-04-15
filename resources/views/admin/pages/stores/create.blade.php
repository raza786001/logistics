@extends('admin.layouts.app')
@section('content')


<div id="page-content">
                    
    <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Stores Form</h3>
            </div>
            <div class="panel-body">
        
                <!-- Inline Form 
                author:-ahmad khalil
                -->
                <!--===================================================-->
               <form action="{{ url('admin/stores/store') }}" method="post">
                @csrf
                
                   <div class="form-group col-lg-6 col-md-6">
                     <label for="">Name</label>
                     <input type="text" name="name" id="" class="form-control" >
                   </div>
                   <div class="form-group col-lg-6 col-md-6">
                    <label for="">address</label>
                    <input type="text" name="address" id="" class="form-control" >
                  </div>
                  <div class="form-group col-lg-4 col-md-4">
                        <label for="">Phone Number</label>
                        <input type="text" name="phone" id="" class="form-control" >
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
                      <div class="form-group col-lg-4 col-md-4">
                            <label for="">Category:</label>
                          
                            <select class="form-control" name="category" id="">
                                @foreach($category as  $cat)
                                <option  name="category">
                                    {{$cat->name}}
                                </option>
                                @endforeach
                            </select>
                            
                          </div>   
                  </div>
                 
                
                  <button type="submit" class="btn btn-primary">Submit</button>
               </form>
                <!--===================================================-->
                <!-- End Inline Form  -->
                <!-- code for validation message  -->
                
                @if ($errors->any())
                <div class="alert alert-secondary" role="alert">
                    <div class="alert-icon">
                        <i class="flaticon-warning "></i>
                    </div>
                    <div class="alert-text">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div><br />
            @endif
                 <!--end of code for validation message  -->   
            </div>
        </div>
        
     
    </div>
    <!--===================================================-->
    <!--End page content-->

    @endsection