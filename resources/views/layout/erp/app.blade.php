<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="Dashtic - Bootstrap Webapp Responsive Dashboard Simple Admin Panel Premium HTML5 Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="admin, admin template, dashboard, admin dashboard, bootstrap 5, responsive, clean, ui, admin panel, ui kit, responsive admin, application, bootstrap 4, flat, bootstrap5, admin dashboard template" />

    <!-- Title -->
    <title>@yield("title")</title>

    <!--Favicon -->
    <link rel="icon" href="{{asset('assets/images/brand/favicon.ico')}}" type="image/x-icon" />

    <!-- Bootstrap css -->
    <link id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Style css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

    <!-- Plugin css -->
    <link href="{{asset('assets/css/plugin.css')}}" rel="stylesheet" />

    <!-- Animate css -->
    <link href="{{asset('assets/css/animated.css')}}" rel="stylesheet" />

    <!---Icons css-->
    <link href="{{asset('assets/plugins/web-fonts/icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/web-fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/web-fonts/plugin.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/js/apexcharts.js')}}"></script>
    @yield("style")
</head>

<body class="main-body app sidebar-mini light-mode ltr">

    <!---Global-loader-->
    <!-- <div id="global-loader">
        <img src="../assets/images/svgs/loader.svg" alt="loader">
    </div> -->

    <div class="page">
        <div class="page-main">

            <!--app header-->
            @include('layout.erp.navbar')
            <!--/app header-->

            <!-- main-sidebar -->

            @include('layout.erp.main_sidebar')

            <!-- end main-sidebar -->

            <!-- app-content start-->
            <div class="app-content main-content">
                <div class="side-app">
                    <div class="container-fluid main-container">

                        @yield('page')

                    </div>
                </div>
            </div>
            <!-- app-content end-->

        </div>

        <!--Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                        <strong>Copyright &copy; {{date("Y")}} <a href="#">ROUND 52</a>.</strong>
                        All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer-->

    </div>

    <!-- Back to top -->
    <a href="#top" id="back-to-top">
        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z" />
        </svg>
    </a>

    <!-- Jquery js-->
    <script src="{{asset('assets/js/vendors/jquery.min.js')}}"></script>

    <!-- Bootstrap5 js-->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!--Othercharts js-->
    <script src="{{asset('assets/plugins/othercharts/jquery.sparkline.min.js')}}"></script>

    <!-- Circle-progress js-->
    <script src="{{asset('assets/js/vendors/circle-progress.min.js')}}"></script>

    <!-- Jquery-rating js-->
    <script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

    <!-- P-scroll js-->
    <script src="{{asset('assets/plugins/p-scrollbar/p-scrollbar.js')}}"></script>

    <!--Sidemenu js-->
    <script src="{{asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>

    <!-- Sticky js -->
    <script src="{{asset('assets/js/sticky.js')}}"></script>

    <!-- ECharts js -->
    <script src="{{asset('assets/plugins/echarts/echarts.js')}}"></script>

    <!-- Peitychart js-->
    <script src="{{asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- Apexchart js-->
 

    <!--Moment js-->
    <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>

    <!-- Daterangepicker js-->
    <script src="{{asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('assets/js/daterange.js')}}"></script>

    <!---jvectormap js-->
    <script src="{{asset('assets/plugins/jvectormap/jquery.vmap.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery.vmap.sampledata.js')}}"></script>

    <!-- Data tables js-->
    <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="../assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="../assets/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="../assets/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="../assets/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="../assets/js/datatables.js"></script>

    <!-- Select2 js -->
    <script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/select2.js')}}"></script>

    <!--Counters -->
    <script src="{{asset('assets/plugins/counters/counterup.min.js')}}"></script>
    <script src="{{asset('assets/plugins/counters/waypoints.min.js')}}"></script>

    <!--Chart js -->
    <script src="{{asset('assets/plugins/chart/chart.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

    <!-- Index js-->
    <script src="{{asset('assets/js/index1.js')}}"></script>

    <!-- Color Theme js -->
    <script src="{{asset('assets/js/themeColors.js')}}"></script>

    <!-- Switcher-Styles js -->
    <script src="{{asset('assets/js/switcher-styles.js')}}"></script>

    <!-- Custom js-->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script>
        // This script will automatically close the alert after a certain time
        setTimeout(function() {
            document.querySelector('.alert').remove();
        }, 2000); // Adjust the time as needed
    </script>

</body>

</html>