<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('style/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('style/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('style/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('style/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('style/dist/css/skins/_all-skins.min.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('style/bower_components/morris.js/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('style/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet"
        href="{{ asset('style/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('style/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{ asset('style/plugins/timepicker/bootstrap-timepicker.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('style/bower_components/select2/dist/css/select2.min.css')}}">

    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('style/plugins/iCheck/all.css')}}">

    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
        href="{{ asset('style/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
    .myDiv {
        display: none;
    }

    /* The switch - the box around the slider */
    .switch {
        position: relative;
        display: inline-block;
        width: 54px;
        height: 28px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 20px;
        width: 20px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
    </style>


</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{URL::asset('style/dist/img/user2-160x160.jpg')}}" class="img-circle"
                            alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Ketkot</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class=""><a href="{{URL('dashboard/dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard</a>
                    </li>
                    <li class=""><a href="{{URL('statistics')}}"><i class="fa fa-bar-chart"></i>Statistics</a></li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Accounts</span>
                            <span class="pull-right-container">
                                <span class="fa fa-angle-left pull-right"></span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL('accounts/approved')}}"><i class="fa fa-check"></i>Approved</a>
                            </li>
                            <li><a href="{{route('pending.accounts')}}"><i class="fa fa-minus-circle"></i>Pending</a>
                            </li>
                            <li><a href="{{URL('accounts/online')}}"><i class="fa fa-toggle-on"></i>Online</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gear"></i>
                            <span>Settings</span>
                            <span class="pull-right-container">
                                <span class="fa fa-angle-left pull-right"></span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL('settings/general')}}"><i class="fa fa-gears"></i>General</a></li>
                            <li><a href="{{URL('settings/media')}}"><i class="fa fa-photo"></i>Media</a></li>
                            <li><a href="{{URL('settings/filter')}}"><i class="fa fa-filter"></i>Filters</a></li>
                            <li><a href="{{URL('settings/link')}}"><i class="fa fa-link"></i>Links</a></li>
                            <li><a href="{{URL('settings/ad')}}"><i class="fa fa-credit-card"></i>Ads</a></li>
                            <li><a href="{{URL('settings/email')}}"><i class="fa fa-envelope-o"></i>Email</a></li>
                            <li><a href="{{URL('settings/notification')}}"><i
                                        class="fa fa-paper-plane"></i>Notification</a></li>
                        </ul>
                    </li>

                    <li class=""><a href="{{URL('payment')}}"><i class="fa fa-money"></i>Payments</a></li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-credit-card"></i>
                            <span>Subscriptions</span>

                            <span class="pull-right-container">
                                <span class="fa fa-angle-left pull-right"></span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL('subscription/add')}}"><i class="fa fa-plus-square"></i>New
                                    Subscription</a></li>
                            <li><a href="{{URL('subscription/index')}}"><i class="fa fa-tasks"></i>Manage
                                    Subscription</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-diamond"></i>
                            <span>Gems</span>
                            <span class="pull-right-container">
                                <span class="fa fa-angle-left pull-right"></span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('gem.add')}}"><i class="fa fa-plus-square"></i>New Package</a></li>
                            <li><a href="{{route('gem.index')}}"><i class="fa fa-tasks"></i>Manage Gems</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gift"></i>
                            <span>Gifts</span>
                            <span class="pull-right-container">
                                <span class="fa fa-angle-left pull-right"></span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('gift.add')}}"><i class="fa fa-plus-square"></i>New Gift</a></li>
                            <li><a href="{{route('gift.index')}}"><i class="fa fa-tasks"></i>Manage Gifts</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-diamond"></i>
                            <span>Sliders</span>
                            <span class="pull-right-container">
                                <span class="fa fa-angle-left pull-right"></span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL('slider/add')}}"><i class="fa fa-plus-square"></i>New Slider</a></li>
                            <li><a href="{{URL('slider/index')}}"><i class="fa fa-calendar"></i>Manage Slider</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-book"></i>
                            <span>Reports</span>
                            <span class="pull-right-container">
                                <span class="fa fa-angle-left pull-right"></span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL('report/add')}}"><i class="fa fa-cubes"></i>Report Titles</a></li>
                            <li><a href="{{URL('report/index')}}"><i class="fa fa-cubes"></i>User's Report</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file-text"></i>
                            <span>Helps</span>
                            <span class="pull-right-container">
                                <span class="fa fa-angle-left pull-right"></span>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL('help/add')}}"><i class="fa fa-plus-square"></i>New Help Query</a></li>
                            <li><a href="{{URL('help/index')}}"><i class="fa fa-calendar"></i>Manage Help</a></li>
                        </ul>
                    </li>

                    <li class=""><a href="{{URL('login')}}"><i class="fa fa-power-off"></i>Logout</a></li>



                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @yield('content')

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2017-2020 <a href="#">Ketkot</a>.</strong> All rights
            reserved.
        </footer>

    </div>
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="{{ asset('style/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('style/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('style/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="{{asset('style/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('style/bower_components/morris.js/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('style/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{asset('style/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('style/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('style/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('style/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('style/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{asset('style/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('style/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('style/bower_components/fastclick/lib/fastclick.js')}}"></script>

    <!-- FLOT CHARTS -->
    <script src="{{asset('style/bower_components/Flot/jquery.flot.js')}}"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="{{asset('style/bower_components/Flot/jquery.flot.resize.js')}}"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="{{asset('style/bower_components/Flot/jquery.flot.pie.js')}}"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="{{asset('style/bower_components/Flot/jquery.flot.categories.js')}}"></script>

    <!-- ChartJS -->
    <script src="{{asset('style/bower_components/chart.js/Chart.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('style/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('style/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('style/dist/js/demo.js')}}"></script>

    <!-- bootstrap time picker -->
    <script src="{{asset('style/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('style/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

    <!-- InputMask -->
    <script src="{{asset('style/plugins/input-mask/jquery.inputmask.js')}}"></script>
    <script src="{{asset('style/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
    <script src="{{asset('style/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>

    <!-- iCheck 1.0.1 -->
    <script src="{{asset('style/plugins/iCheck/icheck.min.js')}}"></script>

    <!-- bootstrap color picker -->
    <script src="{{asset('style/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}">
    </script>




    <script>
    $.widget.bridge('uibutton', $.ui.button);

    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                        'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function(start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                    'MMMM D, YYYY'))
            }
        )

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })


    $(function() {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas)

        var areaChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                    label: 'Electronics',
                    fillColor: 'rgba(210, 214, 222, 1)',
                    strokeColor: 'rgba(210, 214, 222, 1)',
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: 'Digital Goods',
                    fillColor: 'rgba(60,141,188,0.9)',
                    strokeColor: 'rgba(60,141,188,0.8)',
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        }

        var areaChartOptions = {
            //Boolean - If we should show the scale at all
            showScale: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: false,
            //String - Colour of the grid lines
            scaleGridLineColor: 'rgba(0,0,0,.05)',
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - Whether the line is curved between points
            bezierCurve: true,
            //Number - Tension of the bezier curve between points
            bezierCurveTension: 0.3,
            //Boolean - Whether to show a dot for each point
            pointDot: false,
            //Number - Radius of each point dot in pixels
            pointDotRadius: 4,
            //Number - Pixel width of point dot stroke
            pointDotStrokeWidth: 1,
            //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius: 20,
            //Boolean - Whether to show a stroke for datasets
            datasetStroke: true,
            //Number - Pixel width of dataset stroke
            datasetStrokeWidth: 2,
            //Boolean - Whether to fill the dataset with a color
            datasetFill: true,
            //String - A legend template
            legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
            //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true
        }

        //Create the line chart
        areaChart.Line(areaChartData, areaChartOptions)

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChart = new Chart(lineChartCanvas)
        var lineChartOptions = areaChartOptions
        lineChartOptions.datasetFill = false
        lineChart.Line(areaChartData, lineChartOptions)

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieChart = new Chart(pieChartCanvas)
        var PieData = [{
                value: 700,
                color: '#f56954',
                highlight: '#f56954',
                label: 'Chrome'
            },
            {
                value: 500,
                color: '#00a65a',
                highlight: '#00a65a',
                label: 'IE'
            },
            {
                value: 400,
                color: '#f39c12',
                highlight: '#f39c12',
                label: 'FireFox'
            },
            {
                value: 600,
                color: '#00c0ef',
                highlight: '#00c0ef',
                label: 'Safari'
            },
            {
                value: 300,
                color: '#3c8dbc',
                highlight: '#3c8dbc',
                label: 'Opera'
            },
            {
                value: 100,
                color: '#d2d6de',
                highlight: '#d2d6de',
                label: 'Navigator'
            }
        ]
        var pieOptions = {
            //Boolean - Whether we should show a stroke on each segment
            segmentShowStroke: true,
            //String - The colour of each segment stroke
            segmentStrokeColor: '#fff',
            //Number - The width of each segment stroke
            segmentStrokeWidth: 2,
            //Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 50, // This is 0 for Pie charts
            //Number - Amount of animation steps
            animationSteps: 100,
            //String - Animation easing effect
            animationEasing: 'easeOutBounce',
            //Boolean - Whether we animate the rotation of the Doughnut
            animateRotate: true,
            //Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale: false,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: true,
            //String - A legend template
            legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions)

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChart = new Chart(barChartCanvas)
        var barChartData = areaChartData
        barChartData.datasets[1].fillColor = '#00a65a'
        barChartData.datasets[1].strokeColor = '#00a65a'
        barChartData.datasets[1].pointColor = '#00a65a'
        var barChartOptions = {
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            //String - Colour of the grid lines
            scaleGridLineColor: 'rgba(0,0,0,.05)',
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - If there is a stroke on each bar
            barShowStroke: true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth: 2,
            //Number - Spacing between each of the X value sets
            barValueSpacing: 5,
            //Number - Spacing between data sets within X values
            barDatasetSpacing: 1,
            //String - A legend template
            legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
            //Boolean - whether to make the chart responsive
            responsive: true,
            maintainAspectRatio: true
        }

        barChartOptions.datasetFill = false
        barChart.Bar(barChartData, barChartOptions)
    })

    $(function() {
        $('.is-account-active').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/account/isBlock/',
                data: {
                    'is_blocked': status,
                    'id': id
                },
                success: function(data) {
                    console.log(data.success)
                }
            });
        })
    })
    </script>

</body>

</html>