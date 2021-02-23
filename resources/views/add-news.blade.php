<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel 8 User Roles and Permissions Tutorial') }}</title>
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
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
                    </div>
                </div>
            </form>


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
                        <a href="#" class="d-block">ສະບາຍດີ : {{ auth()->user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-header">ຂ່າວສານ</li>
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
                        <li class="nav-header">ປະກາດການຈັດຊື້</li>
                        <li class="nav-item">
                            <a href="{{ url('/add_news') }}" class="nav-link">
                            <i class="nav-icon fa fa-calendar"></i>  ໝວດໝູ່ ການຈັດຊື້</a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-envelope-o"></i> ປະກາດການຈັດຊື້ </a>
                        </li>

                        <li class="nav-header"></li>
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">
                            <i class="nav-icon fa fa-calendar"></i>ກັບໜ້າຫລັກ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"> ອອກຈາກລະບົບ
                            </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
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
                            <h1 class="m-0 text-dark">ສ້າງຂ່າວສານ</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">ສ້າງຂ່າວ</h3>

                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{route('News.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">ປະເພດຂ່່າວ</label>
                                            <input type="text" Name="newsitems_id" class="form-control" required/>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">ຫົວຂໍ້ຂ່າວ</label>
                                            <input type="text" Name="title" class="form-control" required/>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">ເນື່ອຫາຍໍ້</label>
                                            <textarea class="form-control" Name="content" id="floatingTextarea"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">ສະຫລຸບ</label>
                                            <textarea class="form-control"  Name="content2" id="floatingTextarea"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">ວັນທີ</label>
                                            <input type="text" Name="date" class="form-control" required/>
                                        </div>
                                        <div class="form-group">
                                            <label for="file">choose Image</label>
                                            <input type="file" name="file" class="form-control" onchange="previewFile(this)">
                                            <img id="previewImg" alt="News Img" style="max-width: 130px;margin-top:20px;"/>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn">Submit</button>
                                    </form>
                                </div>
                                <!-- /.card-body -->

                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row (main row) -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.0-alpha
            </div>
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
