<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Edumin - Bootstrap Admin Dashboard" />
    <meta property="og:title" content="Edumin - Bootstrap Admin Dashboard" />
    <meta property="og:description" content="Edumin - Bootstrap Admin Dashboard" />
    <meta property="og:image" content="https://edumin.dexignlab.com/xhtml/social-image.png" />
    <meta name="format-detection" content="telephone=no">

    @include('admin.layouts.head')

</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    @include('admin.layouts.main-header')
    <!--**********************************
        Sidebar start
    ***********************************-->
        @include('admin.layouts.main-sidebar')
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    @yield('content')
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    @include('admin.layouts.footer')
    <!--**********************************
        Footer end
    ***********************************-->

</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->

@include('admin.layouts.footer-scripts')


</body>
</html>
