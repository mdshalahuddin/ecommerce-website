<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets') }}/images/favicon.png">
    <title>Ecommerce Admin | @yield('title')</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{{ asset('admin/assets') }}/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{ asset('admin/assets') }}/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/dist') }}/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('admin/dist') }}/css/pages/dashboard1.css" rel="stylesheet">


    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

</head>

<body class="skin-blue fixed-layout">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper">
        @include('admin.inc.header')
        <!-- End Topbar header -->
        @include('admin.inc.sidebar')
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">
                @yield('content')



            </div>
            <!-- End Container fluid  -->
        </div>
        <!-- End Page wrapper  -->
        <!-- footer -->
        <footer class="footer">
            © {{ date('Y-M-D') }} Desiner by
            <a href="https://www.ms-soft.in.com/">ms-soft.in</a>
        </footer>
        <!-- End footer -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{ asset('admin/assets') }}/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/assets') }}/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    </script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('admin/dist') }}/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin/dist') }}/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('admin/dist') }}/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('admin/dist') }}/js/custom.min.js"></script>
    <!-- This page plugins -->
    <!--morris JavaScript -->
    <script src="{{ asset('admin/assets') }}/node_modules/raphael/raphael-min.js"></script>
    <script src="{{ asset('admin/assets') }}/node_modules/morrisjs/morris.min.js"></script>
    <script src="{{ asset('admin/assets') }}/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="{{ asset('admin/assets') }}/node_modules/toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="{{ asset('admin/dist') }}/js/dashboard1.js"></script>
    <script src="{{ asset('admin/assets') }}/node_modules/toast-master/js/jquery.toast.js"></script>
</body>

</html>
