@php isset($menu) ? $menu = $menu : $menu = '' @endphp

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Survei Kepuasan - Satuan Penjamin Mutu - Universitas Negeri Malang</title>
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" id="main-stylesheet" data-version="1.0.0" href="{!! asset('css/shards-dashboards.1.0.0.min.css')!!}">
  <link rel="stylesheet" href="{!! asset('css/extras.1.0.0.min.css')!!}">
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css"> --}}
  {{-- Select 2 --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  {{-- DaterangePicker --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  {{-- Custom css untuk patching style dari plugin --}}
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />

  @stack("style")
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Main Sidebar -->
      <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
        <div class="main-navbar">
          <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="{{ url('admin') }}" style="line-height: 25px;">
              <div class="d-table m-auto">
                <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 27px;" src="{{ asset('images/um_logo.png') }}" alt="Shards Dashboard">
                <span class="d-none d-md-inline ml-1">SIPUAS</span>
              </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
              <i class="material-icons">&#xE5C4;</i>
            </a>
          </nav>
        </div>
        <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
          <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fas fa-search"></i>
              </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> 
          </div>
        </form>
        <div class="nav-wrapper">
          <ul class="nav flex-column">
            <li class="nav-item {{ ($menu) == 'beranda' ? 'active' : '' }}">
              <a class="nav-link " href="{{ url('admin') }}">
                <i class="fa fa-home"></i>
                <span>Beranda</span>
              </a>
            </li>
            <li class="nav-item {{ ($menu) == 'rekap' ? 'active' : '' }}">
              <a class="nav-link " href="{{ url('admin/rekapitulasi') }}">
                <i class="fa fa-chart-pie"></i>
                <span>Rekapitulasi</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <!-- End Main Sidebar -->
      <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
        <div class="main-navbar sticky-top bg-white">
          <!-- Main Navbar -->
          <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
            <!--   <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
              <div class="input-group input-group-seamless ml-3">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-search"></i>
                  </div>
                </div>
                <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> 
                </div>
              </form> -->
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
          <!-- / .main-navbar -->

          <div class="main-content-container container-fluid px-4">
           
            @if(null != session("msg"))
            <div class="row" style="margin-bottom:60px;">
              <div class="col-12">
                <div class="alert alert-accent alert-dismissible fade show mb-0" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                  {{ session("msg") }}
                </div>
              </div>
            </div>
            @endif

            @yield('content')
            <!-- <div class="page-header row no-gutters py-4">
              <div class="col-12 text-center text-sm-center mb-0">
                <h3 class="page-title">#dukungmutuUM</h3>
              </div>
            </div> -->
          </div>

        </main>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script> --}}
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    {{-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> --}}
    {{-- Select2 --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    {{-- DaterangePicker --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    {{-- <script src="{!! asset('js/extras.1.0.0.min.js')!!}"></script> --}}
    {{-- <script src="{!! asset('js/shards-dashboards.1.0.0.min.js')!!}"></script> --}}
    {{-- <script src="{!! asset('js/app/app-blog-overview.1.0.0.js')!!}"></script> --}}
    {{-- <script src="{!! asset('js/app/app-blog-new-post.1.0.0.js')!!}"></script> --}}
    {{-- <script src="{!! asset('js/app/app-components-overview.1.0.0.js')!!}"></script> --}}

    @yield('pagespecificjs')


    @stack("reportjs")
    @stack("highchart")
  </body>
  </html>