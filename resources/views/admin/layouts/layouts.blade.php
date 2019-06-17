<!doctype html>
<html lang="en">
<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- Material Dashboard CSS -->
    <link rel="stylesheet" href="/admin_asset/css/material-dashboard.css">
    <link rel="stylesheet" href="/admin_asset/css/material-dashboard-rtl.css">
</head>
<body>
@yield('header')
<div class="wrapper">
    @include('admin.layouts.sidebar')
    <div class="main-panel">
        @include('admin.layouts.header')
        <div class="content">
    @yield('content')
        </div>
    </div>
</div>


<!--   Core JS Files   -->
<script src="/admin_asset/js/core/jquery.min.js" type="text/javascript"></script>
<script src="/admin_asset/js/core/popper.min.js" type="text/javascript"></script>
<script src="/admin_asset/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>

<!-- Plugin for the Perfect Scrollbar -->
<script src="/admin_asset/js/plugins/perfect-scrollbar.jquery.min.js"></script>

<!-- Plugin for the momentJs  -->
<script src="/admin_asset/js/plugins/moment.min.js"></script>

<!--  Plugin for Sweet Alert -->
<script src="/admin_asset/js/plugins/sweetalert2.js"></script>

<!-- Forms Validations Plugin -->
<script src="/admin_asset/js/plugins/jquery.validate.min.js"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="/admin_asset/js/plugins/jquery.bootstrap-wizard.js"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="/admin_asset/js/plugins/bootstrap-selectpicker.js" ></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="/admin_asset/js/plugins/bootstrap-datetimepicker.min.js"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="/admin_asset/js/plugins/jquery.dataTables.min.js"></script>

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="/admin_asset/js/plugins/jquery.tagsinput.js"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="/admin_asset/js/plugins/jasny-bootstrap.min.js"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="/admin_asset/js/plugins/fullcalendar.min.js"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="/admin_asset/js/plugins/jquery-jvectormap.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/admin_asset/js/plugins/nouislider.min.js" ></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Library for adding dinamically elements -->
<script src="/admin_asset/js/plugins/arrive.min.js"></script>


<!-- Chartist JS -->
<script src="/admin_asset/js/plugins/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="/admin_asset/js/plugins/bootstrap-notify.js"></script>

<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/admin_asset/js/material-dashboard.min.js?v=2.1.1" type="text/javascript"></script>



@yield('js')