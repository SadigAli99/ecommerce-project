<!doctype html>
<html lang="az">

<!-- Mirrored from themesdesign.in/upcube/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 05:29:29 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Grabit - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Grabit" name="description" />
    <meta content="Sadig Aliyev" name="author" />
    <meta name="csrf_token" content="{{ csrf_token() }}">
    @include('back.includes.styles')

</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        @include('back.includes.header')

        @include('back.includes.sidebar')



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('breadcrumb')

                    @yield('content')
                </div>
            </div>

            @include('back.includes.footer')

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    @include('back.includes.scripts')
</body>


<!-- Mirrored from themesdesign.in/upcube/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 05:30:06 GMT -->

</html>
