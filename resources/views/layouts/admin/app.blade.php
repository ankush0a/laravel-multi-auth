
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }} | Home Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <link rel="shortcut icon" href="{{ asset('img/AdminLTELogo.png') }}" type="image/x-icon">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  @include('layouts.admin.header')

  @include('layouts.admin.leftside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-coffee-light">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  @include('layouts.admin.rightside')

  @include('layouts.admin.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>
</body>
</html>
