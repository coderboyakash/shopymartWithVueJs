<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} | Dashboard</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins/toastr/toastr.min.css') }}">
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
          </a>
          <div class="dropdown-menu dropdown-menu dropdown-menu-right">
              <a href="/" class="dropdown-item dropdown-footer">My Profile</a>
              <a href="/" class="dropdown-item dropdown-footer">Logout</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRjjK9ohR2vzY7FzgjtSOANZ1Nt8skS1blCrg&usqp=CAU" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('adminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ auth()->user() ? auth()->user()->name : 'Admin Name' }}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- dashboard li -->
            <li class="nav-item">
              <a href="/" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <!-- Battery li -->
            <li class="nav-item">
              <a href="/" class="nav-link">
                <i class="nav-icon fas fa-battery-full"></i>
                <p>
                  Batteries
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  Level 1
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Level 2</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Level 2
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Level 3</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Level 2</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>

                  <p>Bounce Rate</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>

                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>

                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
        <div class="row">
          @yield('adminContent')
        </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2020-2020 <a href="/">ShopyMart</a>.</strong>
      ShopyMart
      <div class="float-right d-none d-sm-inline-block">
        <!-- <b>Version</b> 3.1.0-pre -->
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('adminLTE/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('adminLTE/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('adminLTE/plugins/chart.js/Chart.min.js') }}"></script>
  <!-- Sparkline -->
  <script src="{{ asset('adminLTE/plugins/sparklines/sparkline.js') }}"></script>
  <!-- JQVMap -->
  <script src="{{ asset('adminLTE/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('adminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('adminLTE/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('adminLTE/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('adminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('adminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <!-- Summernote -->
  <script src="{{ asset('adminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('adminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('adminLTE/dist/js/adminlte.js') }}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('adminLTE/dist/js/demo.js') }}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset('adminLTE/dist/js/pages/dashboard.js') }}"></script>
  <!-- SweetAlert2 -->
  <script src="{{ asset('adminLTE/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
  <!-- Toastr -->
  <script src="{{ asset('adminLTE/plugins/toastr/toastr.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
