<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <title>{{ config('app.name', 'Laravel 8 User Roles and Permissions Tutorial') }}</title> --}}
    <title>@yield('tab-title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('backend/css/app.css') }}">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="brand-link">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PPD LAOS</span>
    </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
                    </div>
                    <div class="info">
                        @guest
                            {{-- <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li> --}}
                        @else
                            <a href="#">ສະບາຍດີ : {{ Auth::user()->name }}</a>
                        @endguest
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-header">ຂ່າວສານ
                            <li class="nav-item">
                                <a href="{{ url('/add_newsitem') }}" class="nav-link">
                                <i class="nav-icon fa fa-calendar"></i>  ໝວດໝູ່</a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-envelope-o"></i> ເພິ່ມຂ່າວ </a>
                            </li>
    
                            <li class="nav-item has-treeview">
                                <a href="{{ url('/news_list') }}" class="nav-link">
                                <i class="nav-icon fa fa-envelope-o"></i> ສະແດງຂ່າວ </a>
                            </li>
                        </li>   
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">ຈັດຊື້-ຈັດຈ້າງ
                            <li class="nav-item">
                                <a href="{{ url('/manage_proc_type') }}" class="nav-link">
                                <i class="nav-icon fa fa-calendar"></i>  ໝວດໝູ່ ການຈັດຊື້</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('/manage_proc_method') }}" class="nav-link">
                                <i class="nav-icon fa fa-calendar"></i>  ວຶທີການຈັດຊື້ </a>
                            </li>
    
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-envelope-o"></i> ປະກາດການຈັດຊື້ </a>
                            </li>
                        </li> 
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">ຮ່າງເອກະສານ
                            <li class="nav-item">
                                <a href="{{ route('manage_legal.create') }}" class="nav-link">
                                <i class="nav-icon fa fa-align-center"></i> ເພີ່ມຮ່າງເອກະສານ</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('manage_legal.index') }}" class="nav-link">
                                <i class="nav-icon fa fa-align-center"></i> ສະແດງຮ່າງເອກະສານ</a>
                            </li>
                        </li> 
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">ເອກະສານທີ່ກ່ຽວຂ້ອງ
                            <li class="nav-item">
                                <a href="{{ url('/manage_key_categories') }}" class="nav-link">
                                <i class="nav-icon fa fa-hdd-o"></i>  ໝວດໝູ່ ເອກະສານ</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('manage_key.create') }}" class="nav-link">
                                <i class="nav-icon fa fa-align-center"></i> ເພີ່ມເອກະສານທີ່ກ່ຽວຂ້ອງ</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('manage_key.index') }}" class="nav-link">
                                <i class="nav-icon fa fa-align-center"></i> ສະແດງເອກະສານທີ່ກ່ຽວຂ້ອງ</a>
                            </li>
                        </li> 
                    </ul>
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="nav-link">
                                ກັບໜ້າຫລັກ</a>
                            </li>

                            <li class="nav-item">
                                @guest

                                @else
                                <a class="nav-link"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"> ອອກຈາກລະບົບ
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                @endguest
                                
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
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('title')</h1>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                        @yield('content')
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020-2021 <a href="http://www.mof.gov.la">IFID</a>.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script src="{{ asset('backend/js/app.js') }}"></script>

</body>

</html>
