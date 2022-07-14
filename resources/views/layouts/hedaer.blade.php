<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @stack('title')
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="icon" href="{{asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQB3Pnb805kD_IfBL8xeWtUf_l5xXc4f2KPhw&usqp=CAU')}}">
  <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('all/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
 
  <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('all/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('all/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('all/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('all/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('all/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('all/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('all/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('all/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('all/plugins/summernote/summernote-bs4.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('all/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset('all/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{asset('all/plugins/bs-stepper/css/bs-stepper.min.css')}}">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{asset('all/plugins/dropzone/min/dropzone.min.css')}}">
   <!-- Select2 -->
  
</head>
<body class="hold-transition sidebar-mini layout-fixed')}}">
<div class="wrapper">

  <!-- Preloader -->


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn btn-success" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a type="submit" class="dropdown-item text-dark">Logout</a>
            </form>
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('all/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
          
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-border-all"></i>
              <p>
                Product Model
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/unit" class="nav-link">
                  <i class="fa-solid fa-right-long"></i>
                  <p>Unit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/brand" class="nav-link">
                  <i class="fa-solid fa-right-long"></i>
                  <p>Brand</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tax" class="nav-link">
                  <i class="fa-solid fa-right-long"></i>
                  <p>Tax</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/categorey" class="nav-link">
                  <i class="fa-solid fa-right-long"></i>
                  <p>Categorey</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/producet_index" class="nav-link">
                  <i class="fa-solid fa-right-long"></i>
                  <p>Producet</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-border-all"></i>
              <p>
                purchase Model
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/purchase" class="nav-link">
                  <i class="fa-solid fa-right-long"></i>
                  <p>purchase</p>
                </a>
              </li>
          </li>
        </ul>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa-solid fa-border-all"></i>
            <p>
              POS
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/pos" class="nav-link">
                <i class="fa-solid fa-right-long"></i>
                <p>pos</p>
              </a>
            </li>
        </li>
      </ul>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa-solid fa-border-all"></i>
          <p>
            Stock Report
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/stock" class="nav-link">
              <i class="fa-solid fa-right-long"></i>
              <p>Stock</p>
            </a>
          </li>
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
    
    <!-- /.content-header -->

    <!-- Main content -->