<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SRKP RMS| @yield('title')</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('dist/css/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('dist/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('dist/css/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('dist/css/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('dist/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('dist/css/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('dist/css/summernote-bs4.min.css')}}">
  </head>
  <body class="sidebar-mini layout-navbar-fixed layout-fixed text-sm">
      <div>
        @yield('userRegister')
       </div>
       <div>
        @yield('userLogin')
       </div>
       <div>
        @yield('resetPassword')
       </div>
       <div>
        @yield('recoverPassword')
       </div>
       <div id="dashboard">
         @yield('dashboard')
        </div>
        <div id="rawMaterials">
         @yield('rawMaterials')
        </div>
        <div id="productAssembly">
         @yield('productAssembly')
        </div>
        <div id="productwiseReport">
         @yield('productwiseReport')
        </div>
        <div id="menuwiseReport">
         @yield('menuwiseReport')
        </div>
        <!-- REQUIRED SCRIPTS --> 
        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
        <!-- jQuery -->
        <script src="{{asset('dist/js/jquery.min.js')}}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{asset('dist/js/jquery-ui.min.js')}}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
         $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('dist/js/bootstrap.bundle.min.js')}}"></script>
        <!-- ChartJS -->
        <script src="{{asset('dist/js/Chart.min.js')}}"></script>
        <!-- Sparkline -->
        <script src="{{asset('dist/js/sparkline.js')}}"></script>
        <!-- JQVMap -->
        <script src="{{asset('dist/js/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('dist/js/jquery.vmap.usa.js')}}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{asset('dist/js/jquery.knob.min.js')}}"></script>
        <!-- daterangepicker -->
        <script src="{{asset('dist/js/moment.min.js')}}"></script>
        <script src="{{asset('dist/js/daterangepicker.js')}}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{asset('dist/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <!-- Summernote -->
        <script src="{{asset('dist/js/summernote-bs4.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('dist/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('dist/js/adminlte.js')}}"></script>
        <!-- <script src="{{asset('dist/js/pages/dashboard.js')}}"></script> -->
       <script>
    // $(function () {
    //     //Initialize Select2 Elements
    //     $('.select2bs4').select2({
    //     theme: 'bootstrap4'
    //     })
    
    // $(".add-invoice-table-row").click(function() {
    //     var markup = "<tr><td class='text-center'><a href='javascript:void(0);' class='del-row'><i class='fa fa-trash text-danger' aria-hidden='true'></i></a>|1</td><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips mb-1' placeholder='Item Name'><textarea class='form-control form-control-sm inv-ips desc-box' name='' id='' placeholder='Description....'></textarea></td><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips'></td><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips'></td><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips'></td><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips'></td class='inv-field'><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips'></td><td class='inv-field'><select class='form-control form-control-sm inv-ips' style='width: 100%;'><option selected='selected'>--None--</option><option value=''>GST@0%</option><option value=''>GST@0.25%</option><option value=''>GST@3%</option><option value=''>GST@5%</option><option value=''>GST@12%</option><option value=''>GST@18%</option><option value=''>GST@28%</option><option value=''>Exempted</option></select></td><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips' disabled></td><td class='inv-field'><input type='text' class='form-control form-control-sm inv-ips text-right'></td></tr>";
    //     $('.invoice-table tbody').append(markup);
    //     $('.adv_dropdown option').prop('selected', function() {
    //         return this.defaultSelected;
    //     });
    // });
    // $('.invoice-table tbody').on('click', '.del-row', function () {
    //         $(this).closest('tr').remove();
    //     })
    // });
  </script>
  </body>
</html>