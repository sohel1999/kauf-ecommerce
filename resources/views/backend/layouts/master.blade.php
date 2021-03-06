<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('uploads/sitelogo/'.config('settings.site_favicon'))}}" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('backend/')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{asset('backend/')}}/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/')}}/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{asset('backend/')}}/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{asset('backend/')}}/assets/vendor/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{asset('backend/')}}/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{asset('backend/')}}/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet"
          href="{{asset('backend/')}}/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('backend/')}}/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{asset('backend/')}}/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="{{asset('backend/')}}/assets/vendor/inputmask/css/inputmask.css"/>
    <link rel="stylesheet" href="{{asset('backend/')}}/assets/vendor/datepicker/tempusdominus-bootstrap-4.css"/>
    <link rel="stylesheet" type="text/css"
          href="{{asset('backend/')}}/assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('backend/')}}/assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('backend/')}}/assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('backend/')}}/assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('css/app.css')}}">


    @stack('css')
    <title>@yield('title','Dashboard')</title>
</head>

<body>
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
@include('backend.partials.header')
<!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
@include('backend.partials.sidebar')
<!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                @yield('content')
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
    @include('backend.partials.footer')
    <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>


    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="{{asset('backend/')}}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<!-- bootstap bundle js -->
<script src="{{asset('backend/')}}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<!-- slimscroll js -->
<script src="{{asset('backend/')}}/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<!-- main js -->
<script src="{{asset('backend/')}}/assets/libs/js/main-js.js"></script>
<!-- chart chartist js -->
<script src="{{asset('backend/')}}/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
<!-- sparkline js -->
<script src="{{asset('backend/')}}/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
<!-- morris js -->
<script src="{{asset('backend/')}}/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
<script src="{{asset('backend/')}}/assets/vendor/charts/morris-bundle/morris.js"></script>
<!-- chart c3 js -->
<script src="{{asset('backend/')}}/assets/vendor/charts/c3charts/c3.min.js"></script>
<script src="{{asset('backend/')}}/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
<script src="{{asset('backend/')}}/assets/vendor/charts/c3charts/C3chartjs.js"></script>
<script src="{{asset('backend/')}}/assets/libs/js/dashboard-ecommerce.js"></script>
<script src="{{asset('backend/')}}/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="{{asset('backend/')}}/assets/libs/js/main-js.js"></script>
<script src="{{asset('backend/')}}/assets/vendor/inputmask/js/jquery.inputmask.bundle.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{asset('backend/')}}/assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="{{asset('backend/')}}/assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('backend/')}}/assets/vendor/datatables/js/data-table.js"></script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

{!! Toastr::message() !!}
@stack('js')
</body>

</html>
