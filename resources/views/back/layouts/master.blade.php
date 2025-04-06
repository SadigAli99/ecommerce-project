<!DOCTYPE html>
<html lang="az">


<!-- Mirrored from demo.dashboardpack.com/marketing-html/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Apr 2025 08:39:10 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Grabit Admin - @yield('title')</title>
    @include('back.includes.styles')
</head>

<body class="crm_body_bg">



    <!-- main content part here -->

    @include('back.includes.sidebar')


    <section class="main_content dashboard_part large_header_bg">
        @include('back.includes.header')

        @yield('content')

        @include('back.includes.footer')
    </section>
    <!-- main content part end -->

    @include('back.includes.chat-box')

    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    @include('back.includes.scripts')
</body>

<!-- Mirrored from demo.dashboardpack.com/marketing-html/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Apr 2025 08:39:10 GMT -->

</html>
