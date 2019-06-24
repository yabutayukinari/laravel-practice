<!doctype html>
<html lang="en">
<head>
    @section('productTitle', 'YMS')
    <title>@yield('title')｜@yield('productTitle')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/admin_asset/css/common.css">

    <link rel="stylesheet" href="/admin_asset/open-iconic/font/css/open-iconic-bootstrap.css">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/7e32e652f7.js"></script>
</head>
<body>
<div class="wrapper">
    <!-- Sidebar  -->
@include('admin.layouts.sidebar', ['pageContents' => $pageContents, 'pageType' => $pageType])
    <!-- navbar -->
    <!-- Page Content  -->
    <div class="container-fluid">
        @include('admin.layouts.header')
        @yield('content')
    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');


        });

        $('[data-toggle="tooltip"]').tooltip()
    })
</script>


@yield('js')