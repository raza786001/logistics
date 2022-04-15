<!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="{{  asset('assets/admin/js/jquery.min.js')}}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{  asset('assets/admin/js/bootstrap.min.js')}}"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{  asset('assets/admin/js/nifty.min.js')}}"></script>




    <!--=================================================-->
    
    <!--Demo script [ DEMONSTRATION ]-->
    <script src="{{  asset('assets/admin/js/demo/nifty-demo.min.js')}}"></script>

    
    <!--Flot Chart [ OPTIONAL ]-->
    <script src="{{  asset('assets/admin/plugins/flot-charts/jquery.flot.min.js')}}"></script>
	<script src="{{  asset('assets/admin/plugins/flot-charts/jquery.flot.resize.min.js')}}"></script>
	<script src="{{  asset('assets/admin/plugins/flot-charts/jquery.flot.tooltip.min.js')}}"></script>


    <!--Sparkline [ OPTIONAL ]-->
    <script src="{{  asset('assets/admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>


    <!--Specify page [ SAMPLE ]-->
    <script src="{{  asset('assets/admin/js/demo/dashboard.js')}}"></script>

    <!--DataTables [ OPTIONAL ]-->
    <script src="{{  asset('assets/admin/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
	<script src="{{  asset('assets/admin/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
	<script src="{{  asset('assets/admin/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('assets/admin/js/sweetalert.all.js') }}"></script>

    <!--DataTables Sample [ SAMPLE ]-->
    <script src="{{  asset('assets/admin/js/demo/tables-datatables.js')}}"></script>
    <script>
         $('#demo-dt-basic').dataTable( {
        "responsive": true,
        "language": {
            "paginate": {
              "previous": '<i class="demo-psi-arrow-left"></i>',
              "next": '<i class="demo-psi-arrow-right"></i>'
            }
        }
    } );

    // Swal.fire({
    //                     type: 'success',
    //                     title: 'Submit Data!',
    //                     text: 'Record is deleted successfully.',
    //                     showConfirmButton: false,
    //                 })
    </script>