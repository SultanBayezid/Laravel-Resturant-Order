<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <style>
    body {
      margin: 0;
      font-family: raleway !important;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      text-align: left;
      background-color: #fff;
    }
    .bg-green {
      background-color: #1a8917 !important;
      color: #ffffff !important;
    }
    .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active,
    .sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active {
      background-color: #1a8917 !important;
    }
    .nav-pills .nav-link {
      border-radius: 0px !important;
    }
    .divider{
       
    margin-left: 10px;
    margin-right: 10px;

    }
  </style>
</head>
<body class="layout-footer-fixed layout-navbar-fixed sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-green">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link bg-green" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link bg-green" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
          <span id="today"></span> <span id="time"></span>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown bg-green">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link bg-green">
      <span class="brand-text font-weight-light">Bombay Spice</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header" style="font-size:12px;">CORE</li>
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-solar-panel"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-header" style="font-size:12px;">MODULES</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bread-slice"></i>
              <p>
                Menu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('menus.index') }}" class="nav-link">
                  <i class="fas fa-hamburger nav-icon"></i>
                  <p>Menu Items</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link">
                  <i class="fas fa-pizza-slice nav-icon"></i>
                  <p>Menu Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('orders.index') }}" class="nav-link">
              <i class="nav-icon far fa-file-alt"></i>
              <p>
                Orders
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('customers.index') }}" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Customers
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('reviews.index') }}" class="nav-link">
              <i class="nav-icon far fa-star"></i>
              <p>
                Reviews
              </p>
            </a>
          </li>
          <li class="nav-header" style="font-size:12px;">SETTINGS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>Settings</p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="nav-icon fas fa-lock"></i>
                  <p>Log Out</p>
              </a>
          </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   <span>Developed by <a href="https://lastlineweb.com">Lastline Web</a></span>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script>
  function displayToday() {
    const now = new Date();
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const todayString = now.toLocaleDateString(undefined, options);
    document.getElementById("today").textContent = `Today is ${todayString}`;
  }

  function displayTime() {
    const now = new Date();
    const timeString = now.toLocaleTimeString();
    document.getElementById("time").textContent = `Time is ${timeString}`;
  }

  displayToday();
  displayTime();

  setInterval(displayTime, 1000);
</script>
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
</body>
</html>
