<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        管理画面
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    {{--app.cssのなにかがナビバーのレイアウトを崩すためコメントアウト--}}
{{--    <link href="{{asset('css/app.css')}}" rel="stylesheet">--}}
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('lib/material-dashboard/assets/css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet">

</head>
<body class="">
<div class="wrapper ">
    {{-- SideBar --}}
    @include('admin/elements.sidebar')
    <div class="main-panel">
        {{-- NavBar --}}
        @include('admin/elements.navbar')
        {{-- Contents --}}
        @yield('content')
        {{-- Footer --}}
        @include('admin/elements.footer')
    </div>


</div>
{{--<script src="{{asset('js/app.js')}}"></script>--}}
<!--   Core JS Files   -->
<script src="{{asset('lib/material-dashboard/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/material-dashboard/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('lib/material-dashboard/assets/js/core/bootstrap-material-design.min.js')}}"
        type="text/javascript"></script>

@yield('script')
</body>
</html>

