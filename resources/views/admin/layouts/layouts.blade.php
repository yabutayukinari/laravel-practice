<!doctype html>
<html lang="en">
<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

    <!-- Material Dashboard CSS -->
    <link rel="stylesheet" href="/admin_asset/css/material-dashboard.css">
</head>
<body>
@yield('header')
<div class="wrapper">
    @include('admin.layouts.sidebar')
    <div class="main-panel">
        <div class="content">
            @yield('content')
        </div>
    </div>
</div>


<!--   Core JS Files   -->
<script src="/admin_asset/js/core/jquery.min.js" type="text/javascript"></script>
<script src="/admin_asset/js/core/popper.min.js" type="text/javascript"></script>
<script src="/admin_asset/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>

@yield('js')