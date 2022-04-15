@extends('admin.layouts.app')
@section('content')


<div id="page-content">
                    
    <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">System users Form</h3>
            </div>
            <div class="panel-body">
        
                <!-- Inline Form 
                author:-ahmad khalil
                -->
                <!--===================================================-->
               <form action="{{ url('admin/allusers/store') }}" method="post">
                @csrf
                
                   <div class="form-group">
                     <label for="">Name</label>
                     <input type="text" name="name" id="" class="form-control" >
                   </div>
                   <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" id="" class="form-control" >
                  </div>
                  <div class="form-group">
                    
                        <label for="">Password</label>
                        <input type="text" name="password" id="" class="form-control" >
                      </div>    
                      <div class="form-group col-lg-6 col-md-6">
                        <label for="">Role:</label>
                        <select class="form-control" name="rolename" id="">
                            @foreach($roles as  $role)
                            <option name="role">
                                {{$role->name}}
                            </option>
                            @endforeach
                        </select>
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