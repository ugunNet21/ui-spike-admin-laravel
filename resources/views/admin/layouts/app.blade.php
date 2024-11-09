<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('template/assets/images/logos/favicon.png') }}" />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/styles.css') }}" />

    <title>Dashboard</title>
    <!-- jvectormap  -->
    <link rel="stylesheet" href="{{ asset('template/assets/libs/jvectormap/jquery-jvectormap.css') }}">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('template/assets/images/logos/loader.svg') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        @include('admin.partials.sidebar')
        <!--  Sidebar End -->
        <div class="page-wrapper">

            <aside class="left-sidebar with-horizontal">
                <!-- Sidebar scroll-->
                <div>
                    <!-- Sidebar navigation-->
                    @include('admin.partials.sidebar-nav')
                </div>
            </aside>

            <div class="body-wrapper">
                <div class="container-fluid">

                    <!--  Header Start -->
                   @include('admin.partials.header')
                    <!--  Header End -->

                    <!--Dashboard-->
                   @yield('content')

                </div>
            </div>
            <script>
                function handleColorTheme(e) {
                    $("html").attr("data-color-theme", e);
                    $(e).prop("checked", !0);
                }
            </script>

            @include('admin.partials.themes-button')
        </div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>
    @include('admin.partials.scripts')
</body>

</html>
