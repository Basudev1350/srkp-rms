<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SRKP GST| @yield('title')</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>
  <body class="sidebar-mini layout-navbar-fixed layout-fixed text-sm">
       <div id="dashboard">
         @yield('dashboard')
        </div>
        <!-- REQUIRED SCRIPTS --> 
        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
       
        <!-- <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script> -->
        
        <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
       
        <script src="{{asset('dist/js/adminlte.js')}}"></script>

        <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
        <script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
        <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <!-- <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="plugins/raphael/raphael.min.js"></script>
        <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script> -->
        <!-- ChartJS -->
        <!-- <script src="plugins/chart.js/Chart.min.js"></script> -->

        <!-- AdminLTE for demo purposes -->
        <!-- <script src="dist/js/demo.js"></script> -->
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!-- <script src="dist/js/pages/dashboard2.js"></script> -->
        <!-- <script>
         $(function () {
         $("#customer-list").DataTable({
         "responsive": true, "lengthChange": false, "autoWidth": false,
         "buttons": ["excel", "pdf", "print", "colvis"]
         }).buttons().container().appendTo('#customer-list_wrapper .col-md-6:eq(0)');
        }); -->
       </script>
       <script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })
    
    $(".add-invoice-table-row").click(function() {
        var markup = "<tr><td class='text-center'><a href='javascript:void(0);' class='del-row'><i class='fa fa-trash text-danger' aria-hidden='true'></i></a>|1</td><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips mb-1' placeholder='Item Name'><textarea class='form-control form-control-sm inv-ips desc-box' name='' id='' placeholder='Description....'></textarea></td><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips'></td><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips'></td><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips'></td><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips'></td class='inv-field'><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips'></td><td class='inv-field'><select class='form-control form-control-sm inv-ips' style='width: 100%;'><option selected='selected'>--None--</option><option value=''>GST@0%</option><option value=''>GST@0.25%</option><option value=''>GST@3%</option><option value=''>GST@5%</option><option value=''>GST@12%</option><option value=''>GST@18%</option><option value=''>GST@28%</option><option value=''>Exempted</option></select></td><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips' disabled></td><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips text-right'></td></tr>";
        $('.invoice-table tbody').append(markup);
        $('.adv_dropdown option').prop('selected', function() {
            return this.defaultSelected;
        });
    });
    $('.invoice-table tbody').on('click', '.del-row', function () {
            $(this).closest('tr').remove();
        })
    });
  </script>
    </body>
</html>