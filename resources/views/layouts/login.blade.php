<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
  <link rel="icon" type="image/png" href="img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>{{ config('app.name', 'intergration') }} - {{Request::path() }}</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <!-- CSS Files -->
  <link href="{{ asset('css/material-dashboard.css')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  {{-- <link href="demo/demo.css" rel="stylesheet" /> --}}
</head>

<body class="">
  <div class="wrapper ">
    {{-- @include('inc.sidebar') --}}
    <div class="main-panel">
      <!-- Navbar -->
      {{-- @include('inc.navbar') --}}
      <!-- End Navbar -->
      <div class="content">
        @yield('content')
      </div>
      {{-- @include('inc.footer') --}}
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="{{ asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="{{ asset('js/plugins/chartist.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('js/material-dashboard.min.js?v=2.1.0')}}" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>