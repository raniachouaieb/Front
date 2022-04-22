
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('templ-internaute//img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('templ-internaute//img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Paper Dashboard 2 by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('templ-internaute/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('templ-internaute/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('templ-internaute/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper ">
    @include('includes.sidebar')
    <div class="main-panel">
        <!-- Navbar -->
    @include('includes.header')
        <!-- End Navbar -->
        <div class="content">
            @yield('content')
        </div>
        <!-- Footer -->
    @include('includes.footer')
    <!-- End of Footer -->
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('templ-internaute/js/core/jquery.min.js')}}"></script>
<script src="{{asset('templ-internaute/js/core/popper.min.js')}}"></script>
<script src="{{asset('templ-internaute/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('templ-internaute/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{asset('templ-internaute/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('templ-internaute/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('templ-internaute/js/paper-dashboard.min.js?v=2.0.1')}}" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('templ-internaute/demo/demo.js')}}"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
</script>
</body>

</html>
