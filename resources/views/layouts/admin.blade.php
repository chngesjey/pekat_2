<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Favicon icon -->
    <link rel="icon" type="{{asset ('assets/image/png')}}" sizes="16x16" href="{{asset ('assets/images/favicon.png')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset ('assets/css/style.css')}}" rel="stylesheet">
    @yield('css')

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div class="header">    
            <div class="header-content clearfix">     
                <div class="nav-control">
                </div>
                <div class="header-right">
                <ul class="nravba-nav navbar-right">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="">
                            <div class="d-sm-none d-lg-inline-block"> {{ Auth::guard('admin')->user()->nama_petugas}}</div></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{route ('admin.logout')}}" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    @if (Auth::guard('admin')->user()->level == 'admin')
                    <li class="{{Request::is('admin/dashboard') ? 'active' : ''}}">
                        <a href="{{ route('dashboard.index') }}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/pengaduan') ? 'active' : '' }}">
                        <a href="{{ route('pengaduan.index') }}" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Pengaduan</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/petugas') ? 'active' : '' }}">
                        <a href="{{ route('petugas.index') }}" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Petugas</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/masyarakat') ? 'active' : '' }}">
                        <a href="{{ route('masyarakat.index') }}" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Masyarakat</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/laporan') ? 'active' : '' }}">
                        <a class="" href="{{ route('laporan.index') }}" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i> <span class="nav-text">Laporan</span>
                        </a>
                    </li>
                    @elseif(Auth::guard('admin')->user()->level == 'petugas')
                    <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard.index') }}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/pengaduan') ? 'active' : '' }}">
                        <a href="{{ route('pengaduan.index') }}" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Pengaduan</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>

        <!-- Content Body -->
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                </div>
            </div>
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Pengaduan
                        Masyarakat</a> 2023</p>
            </div>
        </div>
    </div>

    <script src="{{asset ('assets/plugins/common/common.min.js')}}"></script>
    <script src="{{asset ('assets/js/custom.min.js')}}"></script>
    <script src="{{asset ('assets/js/settings.js')}}"></script>
    <script src="{{asset ('assets/js/gleek.js')}}"></script>
    <script src="{{asset ('assets/js/styleSwitcher.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        // hide show password
         $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
    @yield('js')
</body>

</html>
