<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'Dashboard')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('')}}assets/plugins/fontawesome-free/css/all.min.css">

    @stack('custom-css')

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('')}}assets/dist/css/adminlte.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('layouts.dashboard.navbar')

        @include('layouts.dashboard.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper pt-4 px-2">
            <!-- Main content -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.dashboard.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('')}}assets/plugins/jquery/jquery.min.js"></script>

    @stack('custom-js')

    <!-- AdminLTE App -->
    <script src="{{asset('')}}assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('')}}assets/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('')}}assets/dist/js/demo.js"></script>
</body>

</html>