   <!-- START: Footer-->
   <footer class="site-footer">
            2020 © PICK
        </footer>
        <!-- END: Footer-->



        <!-- START: Back to top-->
        <a href="#" class="scrollup text-center">
            <i class="icon-arrow-up"></i>
        </a>
        <!-- END: Back to top-->


        <!-- START: Template JS-->
        <script src="{{asset('dist/vendors/jquery/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('dist/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('dist/vendors/moment/moment.js')}}"></script>
        <script src="{{asset('dist/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('dist/vendors/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <!-- END: Template JS-->

        <!-- START: APP JS-->
        <script src="{{asset('dist/js/app.js')}}"></script>
        <!-- END: APP JS-->

 <!-- START: Page Vendor JS-->
        <script src="{{asset('dist/vendors/datatable/js/jquery.dataTables.min.js')}}"></script> 
        <script src="{{asset('dist/vendors/datatable/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('dist/vendors/datatable/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('dist/vendors/datatable/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{asset('dist/vendors/datatable/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{asset('dist/vendors/datatable/buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('dist/vendors/datatable/buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('dist/vendors/datatable/buttons/js/buttons.colVis.min.js')}}"></script>
        <script src="{{asset('dist/vendors/datatable/buttons/js/buttons.flash.min.js')}}"></script>
        <script src="{{asset('dist/vendors/datatable/buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('dist/vendors/datatable/buttons/js/buttons.print.min.js')}}"></script>
        <!-- END: Page Vendor JS-->

        <!-- START: Page Script JS-->        
        <script src="{{asset('dist/js/datatable.script.js')}}"></script>
        <!-- END: Page Script JS-->

        <script src="{{asset('js/custom.js')}}"></script>

        <!-- START: Page Vendor JS-->
        <script src="{{asset('dist/vendors/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('dist/vendors/morris/morris.min.js')}}"></script>
        <script src="{{asset('dist/vendors/chartjs/Chart.min.js')}}"></script>
        <script src="{{asset('dist/vendors/starrr/starrr.js')}}"></script>
        <script src="{{asset('dist/vendors/jquery-flot/jquery.canvaswrapper.js')}}"></script>
        <script src="{{asset('dist/vendors/jquery-flot/jquery.colorhelpers.js')}}"></script>
        <script src="{{asset('dist/vendors/jquery-flot/jquery.flot.js')}}"></script>
        <script src="{{asset('dist/vendors/jquery-flot/jquery.flot.saturated.js')}}"></script>
        <script src="{{asset('dist/vendors/jquery-flot/jquery.flot.browser.js')}}"></script>
        <script src="{{asset('dist/vendors/jquery-flot/jquery.flot.drawSeries.js')}}"></script>
        <script src="{{asset('dist/vendors/jquery-flot/jquery.flot.uiConstants.js')}}"></script>
        <script src="{{asset('dist/vendors/jquery-flot/jquery.flot.legend.js')}}"></script>
        <script src="{{asset('dist/vendors/jquery-flot/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('dist/vendors/chartjs/Chart.min.js')}}"></script>
        <script src="{{asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
        <script src="{{asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
        <script src="{{asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js')}}"></script>
        <script src="{{asset('dist/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js')}}"></script>
        <script src="{{asset('dist/vendors/apexcharts/apexcharts.min.js')}}"></script>
        <!-- END: Page Vendor JS-->

        <!-- START: Page JS-->
        <script src="{{asset('dist/js/home.script.js')}}"></script>
        <!-- END: Page JS-->
        
        <script type="text/javascript" src="{{('http://keith-wood.name/js/jquery.signature.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{('http://keith-wood.name/css/jquery.signature.css')}}">

        <script>
         var sign =  $('#signaturePad').signature({syncField: '#signature64', syncFormat: 'PNG'});
       $('#clear').click(function(e){
       e.preventDefault();
       sign.signature('clear');
       $('#signature64').val('');
   });
  </script>