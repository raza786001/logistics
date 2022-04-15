@extends('admin.layouts.app')
@section('content')


<div id="page-content">
                    
    <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Vendor Form</h3>
            </div>
            <div class="panel-body">
        
                <!-- Inline Form 
                author:-ahmad khalil
                -->
                <!--===================================================-->
               <form action="{{ url('admin/order/store') }}" method="post">
                @csrf
                
                   <div class="form-group">
                     <label for="">Client Name</label>
                     <input type="text" name="name" id="" class="form-control" >
                   </div>
                   <div class="form-group">
                    <label for="">Country Of Warehouse</label>
                    <input type="text" name="country_warehouse" id="" class="form-control" >
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="">Phone NO.</label>
                    <input type="text" name="phone_no" id="" class="form-control" >
                  </div>
                   <div class="form-group">
                    <label for="">Total Fees</label>
                    <input type="text" name="total_fees" id="" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="">Type Of Service</label>
                    <input type="text" name="type_of_service" id="" class="form-control" >
                  </div>
                  <div class="form-group">
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" name="status" id="" class="form-control" >
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