<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>{{$setting->nama_perusahaan}} | @yield('title')</title> --}}
    {{-- <meta name="csrf-token" content="{{csrf_token()}}"> --}}

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE/dist')}}/css/adminlte.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    {{-- <link id="bsdp-css" href="https://unpkg.com/[email protected]/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet"> --}}
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins')}}/summernote/summernote-bs4.min.css">
    
    <style>
      .help-block.with-errors {
          color: red;
      }
      /* .brand-link {
            display: flex;
            justify-content: center;
            align-items: center;
        } */
   </style>

    @stack('css')
    
  </head>