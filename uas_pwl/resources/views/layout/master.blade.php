<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title') | EventApp</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('partials.style')
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="dashboard dashboard_1">
<div class="full_container">
    <div class="inner_container">
        <!-- Sidebar  -->
        @include('layout.sidebar')

        <!-- right content -->
        <div id="content">
            <!-- topbar -->
            @include('layout.navbar')

            <!-- dashboard inner -->
            <div class="midde_cont">
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- footer -->
                @include('layout.footer')
            </div>
            <!-- end dashboard inner -->
        </div>
    </div>
</div>
</body>
</html>
